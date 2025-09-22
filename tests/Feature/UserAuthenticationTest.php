<?php

declare(strict_types=1);

<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\User\Models\AuthenticationLog;
use Modules\User\Models\User;
=======
use Modules\User\Models\User;
use Modules\User\Models\AuthenticationLog;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
>>>>>>> 079c9da7 (.)

describe('User Authentication', function () {
    it('can authenticate user with correct credentials', function () {
        $user = createUser([
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
            'is_active' => true,
        ]);
<<<<<<< HEAD

=======
        
>>>>>>> 079c9da7 (.)
        $authenticated = Auth::attempt([
            'email' => 'test@example.com',
            'password' => 'password123',
        ]);
<<<<<<< HEAD

        expect($authenticated)->toBeTrue()->and(Auth::user()?->id)->toBe($user->id);
=======
        
        expect($authenticated)->toBeTrue()
            ->and(Auth::user()->id)->toBe($user->id);
>>>>>>> 079c9da7 (.)
    });

    it('cannot authenticate inactive user', function () {
        createUser([
            'email' => 'inactive@example.com',
            'password' => Hash::make('password123'),
            'is_active' => false,
        ]);
<<<<<<< HEAD

=======
        
>>>>>>> 079c9da7 (.)
        $authenticated = Auth::attempt([
            'email' => 'inactive@example.com',
            'password' => 'password123',
        ]);
<<<<<<< HEAD

=======
        
>>>>>>> 079c9da7 (.)
        expect($authenticated)->toBeFalse();
    });

    it('logs authentication attempts', function () {
        $user = createUser([
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
            'is_active' => true,
        ]);
<<<<<<< HEAD

=======
        
>>>>>>> 079c9da7 (.)
        Auth::attempt([
            'email' => 'test@example.com',
            'password' => 'password123',
        ]);
<<<<<<< HEAD

        expect($user->authentications)
            ->toHaveCount(1)
            ->and($user->authentications->first())
            ->toBeInstanceOf(AuthenticationLog::class);
=======
        
        expect($user->authentications)->toHaveCount(1)
            ->and($user->authentications->first())->toBeInstanceOf(AuthenticationLog::class);
>>>>>>> 079c9da7 (.)
    });

    it('handles password expiration', function () {
        $user = createUser([
            'password_expires_at' => now()->subDay(),
        ]);
<<<<<<< HEAD

=======
        
>>>>>>> 079c9da7 (.)
        expect($user->password_expires_at->isPast())->toBeTrue();
    });

    it('supports OTP authentication', function () {
        $user = createUser(['is_otp' => true]);
<<<<<<< HEAD

        expect($user->is_otp)->toBeTrue();
    });
});
=======
        
        expect($user->is_otp)->toBeTrue();
    });
});
>>>>>>> 079c9da7 (.)
