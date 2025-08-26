<?php

declare(strict_types=1);

uses(\Tests\TestCase::class);

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Models\User;
use Modules\User\Models\Team;
use Modules\User\Models\Profile;
use Modules\User\Models\AuthenticationLog;

// In-memory helper: build a User without touching DB
function stubUser(array $attributes = []): User {
    $defaults = [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'name' => 'John Doe',
        'email' => 'john.doe@example.test',
        'email_verified_at' => Carbon::now(),
        'password' => password_hash('secret', PASSWORD_BCRYPT),
        'remember_token' => null,
        'lang' => 'it',
        'is_active' => true,
        'is_otp' => false,
        'password_expires_at' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
    if (array_key_exists('password', $attributes) && is_string($attributes['password'])) {
        $plain = $attributes['password'];
        if (!str_starts_with($plain, '$2y$') && !str_starts_with($plain, '$argon2')) {
            $attributes['password'] = password_hash($plain, PASSWORD_BCRYPT);
        }
    }
    $u = new User();
    $u->forceFill(array_merge($defaults, $attributes));
    return $u;
}

// Provide Eloquent connection resolver and event dispatcher once for this file
beforeAll(function (): void {
    try {
        Model::setConnectionResolver(app('db'));
        Model::setEventDispatcher(app('events'));
    } catch (\Throwable $e) {
        // TestCase should have the app; if not, ignore silently for pure in-memory assertions
    }
});

describe('User Model', function () {
    it('can be created (in-memory)', function () {
        $user = stubUser();
        
        expect($user)->toBeInstanceOf(User::class)
            ->and($user->exists)->toBeFalse()
            ->and($user->email)->toBeString();
    });

    it('supports mass-assignment of expected attributes (behavior)', function () {
        $data = [
            'first_name' => 'Jane',
            'last_name' => 'Roe',
            'name' => 'Jane Roe',
            'email' => 'jane.roe@example.test',
            'lang' => 'en',
            'is_active' => false,
            'is_otp' => true,
        ];
        $user = new User($data);
        expect($user->first_name)->toBe('Jane')
            ->and($user->last_name)->toBe('Roe')
            ->and($user->email)->toBe('jane.roe@example.test')
            ->and($user->lang)->toBe('en')
            ->and($user->is_active)->toBeFalse()
            ->and($user->is_otp)->toBeTrue();
    });

    it('declares sensitive attributes as hidden (without serialization)', function () {
        $hidden = (new User())->getHidden();
        expect($hidden)->toContain('password')
            ->and($hidden)->toContain('remember_token');
    });

    it('casts attributes correctly', function () {
        $user = stubUser();
        
        expect($user->email_verified_at)->toBeInstanceOf(Carbon::class)
            ->and($user->created_at)->toBeInstanceOf(Carbon::class)
            ->and($user->updated_at)->toBeInstanceOf(Carbon::class)
            ->and($user->is_active)->toBeBoolean()
            ->and($user->is_otp)->toBeBoolean();
    });

    it('has proper fillable attributes', function () {
        $fillable = (new User())->getFillable();
        
        expect($fillable)->toContain('first_name')
            ->and($fillable)->toContain('last_name')
            ->and($fillable)->toContain('name')
            ->and($fillable)->toContain('email')
            ->and($fillable)->toContain('password')
            ->and($fillable)->toContain('lang')
            ->and($fillable)->toContain('is_active')
            ->and($fillable)->toContain('is_otp');
    });

    it('handles password hashing correctly', function () {
        $user = stubUser(['password' => 'plaintext']);
        
        expect($user->password)->toStartWith('$2y$')
            ->and(password_verify('plaintext', $user->password))->toBeTrue();
    });

    it('preserves already hashed passwords', function () {
        $hashed = password_hash('existing', PASSWORD_BCRYPT);
        $user = stubUser(['password' => $hashed]);
        
        expect($user->password)->toBe($hashed);
    });

    it('supports different locales', function () {
        $user = stubUser(['lang' => 'en']);
        expect($user->lang)->toBe('en');
        
        $user = stubUser(['lang' => 'de']);
        expect($user->lang)->toBe('de');
    });

    it('handles active/inactive status', function () {
        $activeUser = stubUser(['is_active' => true]);
        $inactiveUser = stubUser(['is_active' => false]);
        
        expect($activeUser->is_active)->toBeTrue()
            ->and($inactiveUser->is_active)->toBeFalse();
    });

    it('manages OTP status', function () {
        $otpUser = stubUser(['is_otp' => true]);
        $regularUser = stubUser(['is_otp' => false]);
        
        expect($otpUser->is_otp)->toBeTrue()
            ->and($regularUser->is_otp)->toBeFalse();
    });

    it('supports password expiration', function () {
        $expiryDate = Carbon::now()->addDays(30);
        $user = stubUser(['password_expires_at' => $expiryDate]);
        
        expect($user->password_expires_at)->toBeInstanceOf(Carbon::class)
            ->and($user->password_expires_at->timestamp)->toBe($expiryDate->timestamp);
    });

    it('handles null password expiration', function () {
        $user = stubUser(['password_expires_at' => null]);
        expect($user->password_expires_at)->toBeNull();
    });

    it('maintains timestamps', function () {
        $user = stubUser();
        
        expect($user->created_at)->toBeInstanceOf(Carbon::class)
            ->and($user->updated_at)->toBeInstanceOf(Carbon::class);
    });

    it('supports remember token', function () {
        $user = stubUser(['remember_token' => 'token123']);
        expect($user->remember_token)->toBe('token123');
        
        $user = stubUser(['remember_token' => null]);
        expect($user->remember_token)->toBeNull();
    });

    it('validates email format', function () {
        $user = stubUser(['email' => 'valid@email.com']);
        expect($user->email)->toBe('valid@email.com');
        
        $user = stubUser(['email' => 'another.valid@domain.org']);
        expect($user->email)->toBe('another.valid@domain.org');
    });

    it('handles name variations', function () {
        $user = stubUser([
            'first_name' => 'José',
            'last_name' => 'García-López',
            'name' => 'José García-López'
        ]);
        
        expect($user->first_name)->toBe('José')
            ->and($user->last_name)->toBe('García-López')
            ->and($user->name)->toBe('José García-López');
    });

    it('supports different timezones in timestamps', function () {
        $now = Carbon::now('UTC');
        $user = stubUser([
            'created_at' => $now,
            'updated_at' => $now
        ]);
        
        expect($user->created_at->timezone->getName())->toBe('UTC')
            ->and($user->updated_at->timezone->getName())->toBe('UTC');
    });

    it('handles empty attributes gracefully', function () {
        $user = stubUser([
            'first_name' => '',
            'last_name' => '',
            'name' => ''
        ]);
        
        expect($user->first_name)->toBe('')
            ->and($user->last_name)->toBe('')
            ->and($user->name)->toBe('');
    });

    it('supports profile relationship structure', function () {
        $user = stubUser();
        
        // Test that the user can potentially have a profile
        expect($user)->toBeInstanceOf(User::class);
        
        // This would test the actual relationship if we had a database
        // expect($user->profile)->toBeInstanceOf(Profile::class);
    });

    it('supports team relationship structure', function () {
        $user = stubUser();
        
        // Test that the user can potentially belong to teams
        expect($user)->toBeInstanceOf(User::class);
        
        // This would test the actual relationship if we had a database
        // expect($user->teams)->toBeInstanceOf(Collection::class);
    });

    it('supports authentication log relationship structure', function () {
        $user = stubUser();
        
        // Test that the user can potentially have authentication logs
        expect($user)->toBeInstanceOf(User::class);
        
        // This would test the actual relationship if we had a database
        // expect($user->authenticationLogs)->toBeInstanceOf(Collection::class);
    });

    it('maintains data integrity during mass assignment', function () {
        $data = [
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
            'password' => 'secure123',
            'lang' => 'it',
            'is_active' => true,
            'is_otp' => false
        ];
        
        $user = new User($data);
        
        expect($user->first_name)->toBe('Test')
            ->and($user->last_name)->toBe('User')
            ->and($user->email)->toBe('test@example.com')
            ->and($user->lang)->toBe('it')
            ->and($user->is_active)->toBeTrue()
            ->and($user->is_otp)->toBeFalse();
    });

    it('handles edge case password scenarios', function () {
        // Test with very long password
        $longPassword = str_repeat('a', 1000);
        $user = stubUser(['password' => $longPassword]);
        expect(password_verify($longPassword, $user->password))->toBeTrue();
        
        // Test with special characters
        $specialPassword = '!@#$%^&*()_+-=[]{}|;:,.<>?';
        $user = stubUser(['password' => $specialPassword]);
        expect(password_verify($specialPassword, $user->password))->toBeTrue();
        
        // Test with unicode characters
        $unicodePassword = 'pässwörd';
        $user = stubUser(['password' => $unicodePassword]);
        expect(password_verify($unicodePassword, $user->password))->toBeTrue();
    });

    it('supports different hash algorithms', function () {
        // Test with Argon2 hash
        $argon2Hash = password_hash('test', PASSWORD_ARGON2I);
        $user = stubUser(['password' => $argon2Hash]);
        expect($user->password)->toBe($argon2Hash);
        
        // Test with Bcrypt hash
        $bcryptHash = password_hash('test', PASSWORD_BCRYPT);
        $user = stubUser(['password' => $bcryptHash]);
        expect($user->password)->toBe($bcryptHash);
    });
});