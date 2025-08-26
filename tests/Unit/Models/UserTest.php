<?php

declare(strict_types=1);

use Modules\User\Models\User;
use Modules\User\Enums\UserType;
use Illuminate\Support\Facades\Hash;

test('user can be created', function () {
    $user = createUser([
        'name' => 'Mario Rossi',
        'email' => 'mario.rossi@example.com',
        'type' => UserType::CustomerUser,
    ]);

    expect($user)
        ->toBeUser()
        ->and($user->name)->toBe('Mario Rossi')
        ->and($user->email)->toBe('mario.rossi@example.com')
        ->and($user->type)->toBe(UserType::CustomerUser);
});

test('user has required attributes', function () {
    $user = makeUser();

    expect($user)
        ->toHaveProperty('name')
        ->toHaveProperty('email')
        ->toHaveProperty('type')
        ->toHaveProperty('email_verified_at')
        ->toHaveProperty('password');
});

test('user can be bo user type', function () {
    $boUser = createUser(['type' => UserType::BoUser]);
    
    expect($boUser->type)->toBe(UserType::BoUser);
});

test('user can be customer user type', function () {
    $customerUser = createUser(['type' => UserType::CustomerUser]);
    
    expect($customerUser->type)->toBe(UserType::CustomerUser);
});

test('user password is hashed', function () {
    $user = createUser(['password' => 'password123']);
    
    expect($user->password)
        ->not->toBe('password123')
        ->and(Hash::check('password123', $user->password))->toBeTrue();
});

test('user email is unique', function () {
    createUser(['email' => 'test@example.com']);
    
    expect(fn() => createUser(['email' => 'test@example.com']))
        ->toThrow(Illuminate\Database\QueryException::class);
});

test('user can have profile', function () {
    $user = createUser();
    $profile = $user->profile()->create([
        'bio' => 'Test bio',
        'location' => 'Test location',
    ]);

    expect($user->profile)->toBe($profile);
    expect($user->profile->bio)->toBe('Test bio');
});

test('user can belong to teams', function () {
    $user = createUser();
    $team = createTeam(['name' => 'Test Team']);
    
    $user->teams()->attach($team->id, ['role' => 'member']);
    
    expect($user->teams)->toHaveCount(1);
    expect($user->teams->first()->name)->toBe('Test Team');
});

test('user can have roles', function () {
    $user = createUser();
    $role = createRole('admin');
    
    $user->assignRole($role);
    
    expect($user)->toHaveRole('admin');
    expect($user->hasRole('admin'))->toBeTrue();
});

test('user is active by default', function () {
    $user = createUser();
    
    expect($user->is_active)->toBeTrue();
});

test('user can be deactivated', function () {
    $user = createUser(['is_active' => false]);
    
    expect($user->is_active)->toBeFalse();
});

test('user email verification status', function () {
    $user = createUser(['email_verified_at' => null]);
    
    expect($user->hasVerifiedEmail())->toBeFalse();
    
    $user->markEmailAsVerified();
    
    expect($user->hasVerifiedEmail())->toBeTrue();
    expect($user->email_verified_at)->not->toBeNull();
});
