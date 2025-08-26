<?php

declare(strict_types=1);

use Modules\User\Models\User;
use Modules\User\Enums\UserType;

test('user can be created', function () {
    $user = createUser([
        'name' => 'Mario Rossi',
        'email' => 'mario.rossi@example.com',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'type' => UserType::PATIENT,
=======
        'type' => UserType::CustomerUser,
>>>>>>> f3bab43 (.)
=======
        'type' => UserType::CustomerUser,
>>>>>>> 3fc5300 (.)
=======
        'type' => UserType::CustomerUser,
>>>>>>> 4f6d2d5 (.)
    ]);

    expect($user)
        ->toBeUser()
        ->and($user->name)->toBe('Mario Rossi')
        ->and($user->email)->toBe('mario.rossi@example.com')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        ->and($user->type)->toBe(UserType::PATIENT);
=======
        ->and($user->type)->toBe(UserType::CustomerUser);
>>>>>>> f3bab43 (.)
=======
        ->and($user->type)->toBe(UserType::CustomerUser);
>>>>>>> 3fc5300 (.)
=======
        ->and($user->type)->toBe(UserType::CustomerUser);
>>>>>>> 4f6d2d5 (.)
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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
test('user can be doctor type', function () {
    $doctor = createUser(['type' => UserType::DOCTOR]);
=======
test('user can be bo user type', function () {
    $boUser = createUser(['type' => UserType::BoUser]);
>>>>>>> 3fc5300 (.)
    
    expect($boUser->type)->toBe(UserType::BoUser);
});

test('user can be customer user type', function () {
    $customerUser = createUser(['type' => UserType::CustomerUser]);
    
<<<<<<< HEAD
    expect($patient->type)->toBe(UserType::PATIENT)
        ->and($patient->isPatient())->toBeTrue()
        ->and($patient->isDoctor())->toBeFalse();
=======
=======
>>>>>>> 4f6d2d5 (.)
test('user can be bo user type', function () {
    $boUser = createUser(['type' => UserType::BoUser]);
    
    expect($boUser->type)->toBe(UserType::BoUser);
});

test('user can be customer user type', function () {
    $customerUser = createUser(['type' => UserType::CustomerUser]);
    
    expect($customerUser->type)->toBe(UserType::CustomerUser);
<<<<<<< HEAD
>>>>>>> f3bab43 (.)
=======
    expect($customerUser->type)->toBe(UserType::CustomerUser);
>>>>>>> 3fc5300 (.)
=======
>>>>>>> 4f6d2d5 (.)
});

test('user password is hashed', function () {
    $user = createUser(['password' => 'password123']);
    
    expect($user->password)
        ->not->toBe('password123')
        ->and(Hash::check('password123', $user->password))->toBeTrue();
});
