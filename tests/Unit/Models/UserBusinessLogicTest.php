<?php

declare(strict_types=1);

use Modules\User\Models\User;

describe('User Business Logic', function () {
    test('user extends base user', function () {
        expect(User::class)->toBeSubclassOf(\Modules\User\Models\BaseUser::class);
    });

    test('user has authentication capabilities', function () {
        $user = new User();
        $user->email = 'test@example.com';
        $user->password = 'hashed-password';
<<<<<<< HEAD

=======
        
>>>>>>> 079c9da7 (.)
        expect($user->email)->toBe('test@example.com');
        expect($user->password)->toBe('hashed-password');
    });

    test('user can have name components', function () {
        $user = new User();
        $user->first_name = 'Mario';
        $user->last_name = 'Rossi';
        $user->name = 'Mario Rossi';
<<<<<<< HEAD

=======
        
>>>>>>> 079c9da7 (.)
        expect($user->first_name)->toBe('Mario');
        expect($user->last_name)->toBe('Rossi');
        expect($user->name)->toBe('Mario Rossi');
    });

    test('user has activation status', function () {
        $user = new User();
        $user->is_active = true;
<<<<<<< HEAD

=======
        
>>>>>>> 079c9da7 (.)
        expect($user->is_active)->toBe(true);
    });

    test('user has otp capability', function () {
        $user = new User();
        $user->is_otp = true;
<<<<<<< HEAD

=======
        
>>>>>>> 079c9da7 (.)
        expect($user->is_otp)->toBe(true);
    });

    test('user can have language preference', function () {
        $user = new User();
        $user->lang = 'it';
<<<<<<< HEAD

=======
        
>>>>>>> 079c9da7 (.)
        expect($user->lang)->toBe('it');
    });

    test('user has email verification tracking', function () {
        $user = new User();
        $user->email_verified_at = '2023-01-01 12:00:00';
<<<<<<< HEAD

=======
        
>>>>>>> 079c9da7 (.)
        expect($user->email_verified_at)->toBe('2023-01-01 12:00:00');
    });

    test('user has password expiry tracking', function () {
        $user = new User();
        $user->password_expires_at = '2023-12-31 23:59:59';
<<<<<<< HEAD

=======
        
>>>>>>> 079c9da7 (.)
        expect($user->password_expires_at)->toBe('2023-12-31 23:59:59');
    });

    test('user can have current team', function () {
        $user = new User();
        $user->current_team_id = 1;
<<<<<<< HEAD

=======
        
>>>>>>> 079c9da7 (.)
        expect($user->current_team_id)->toBe(1);
    });

    test('user can have profile photo', function () {
        $user = new User();
        $user->profile_photo_path = '/storage/profile-photos/user.jpg';
<<<<<<< HEAD

=======
        
>>>>>>> 079c9da7 (.)
        expect($user->profile_photo_path)->toBe('/storage/profile-photos/user.jpg');
    });

    test('user can have remember token', function () {
        $user = new User();
        $user->remember_token = 'abc123def456';
<<<<<<< HEAD

        expect($user->remember_token)->toBe('abc123def456');
    });
});
=======
        
        expect($user->remember_token)->toBe('abc123def456');
    });
});
>>>>>>> 079c9da7 (.)
