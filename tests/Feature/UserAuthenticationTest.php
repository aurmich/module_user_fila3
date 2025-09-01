<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\User\Models\AuthenticationLog;
=======
use Modules\User\Models\User;
use Modules\User\Models\AuthenticationLog;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
>>>>>>> 8055579 (.)
=======
use Modules\User\Models\User;
use Modules\User\Models\AuthenticationLog;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
>>>>>>> 8d82f8c (.)

describe('User Authentication', function () {
    it('can authenticate user with correct credentials', function () {
        $user = createUser([
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
            'is_active' => true,
        ]);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8055579 (.)
=======
        
>>>>>>> 8d82f8c (.)
        $authenticated = Auth::attempt([
            'email' => 'test@example.com',
            'password' => 'password123',
        ]);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8055579 (.)
=======
        
>>>>>>> 8d82f8c (.)
        expect($authenticated)->toBeTrue()
            ->and(Auth::user()->id)->toBe($user->id);
    });

    it('cannot authenticate inactive user', function () {
        createUser([
            'email' => 'inactive@example.com',
            'password' => Hash::make('password123'),
            'is_active' => false,
        ]);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8055579 (.)
=======
        
>>>>>>> 8d82f8c (.)
        $authenticated = Auth::attempt([
            'email' => 'inactive@example.com',
            'password' => 'password123',
        ]);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8055579 (.)
=======
        
>>>>>>> 8d82f8c (.)
        expect($authenticated)->toBeFalse();
    });

    it('logs authentication attempts', function () {
        $user = createUser([
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
            'is_active' => true,
        ]);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8055579 (.)
=======
        
>>>>>>> 8d82f8c (.)
        Auth::attempt([
            'email' => 'test@example.com',
            'password' => 'password123',
        ]);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8055579 (.)
=======
        
>>>>>>> 8d82f8c (.)
        expect($user->authentications)->toHaveCount(1)
            ->and($user->authentications->first())->toBeInstanceOf(AuthenticationLog::class);
    });

    it('handles password expiration', function () {
        $user = createUser([
            'password_expires_at' => now()->subDay(),
        ]);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8055579 (.)
=======
        
>>>>>>> 8d82f8c (.)
        expect($user->password_expires_at->isPast())->toBeTrue();
    });

    it('supports OTP authentication', function () {
        $user = createUser(['is_otp' => true]);
<<<<<<< HEAD
<<<<<<< HEAD

        expect($user->is_otp)->toBeTrue();
    });
});
=======
        
        expect($user->is_otp)->toBeTrue();
    });
});
>>>>>>> 8055579 (.)
=======
        
        expect($user->is_otp)->toBeTrue();
    });
});
>>>>>>> 8d82f8c (.)
