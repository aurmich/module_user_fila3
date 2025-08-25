<?php

declare(strict_types=1);

use Modules\User\Models\User;
use Modules\User\Enums\UserType;

test('user can be created', function () {
    $user = createUser([
        'name' => 'Mario Rossi',
        'email' => 'mario.rossi@example.com',
<<<<<<< HEAD
        'type' => UserType::PATIENT,
=======
        'type' => UserType::CustomerUser,
>>>>>>> f3bab43 (.)
    ]);

    expect($user)
        ->toBeUser()
        ->and($user->name)->toBe('Mario Rossi')
        ->and($user->email)->toBe('mario.rossi@example.com')
<<<<<<< HEAD
        ->and($user->type)->toBe(UserType::PATIENT);
=======
        ->and($user->type)->toBe(UserType::CustomerUser);
>>>>>>> f3bab43 (.)
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
test('user can be doctor type', function () {
    $doctor = createUser(['type' => UserType::DOCTOR]);
    
    expect($doctor->type)->toBe(UserType::DOCTOR)
        ->and($doctor->isDoctor())->toBeTrue()
        ->and($doctor->isPatient())->toBeFalse();
});

test('user can be patient type', function () {
    $patient = createUser(['type' => UserType::PATIENT]);
    
    expect($patient->type)->toBe(UserType::PATIENT)
        ->and($patient->isPatient())->toBeTrue()
        ->and($patient->isDoctor())->toBeFalse();
=======
test('user can be bo user type', function () {
    $boUser = createUser(['type' => UserType::BoUser]);
    
    expect($boUser->type)->toBe(UserType::BoUser);
});

test('user can be customer user type', function () {
    $customerUser = createUser(['type' => UserType::CustomerUser]);
    
    expect($customerUser->type)->toBe(UserType::CustomerUser);
>>>>>>> f3bab43 (.)
});

test('user password is hashed', function () {
    $user = createUser(['password' => 'password123']);
    
    expect($user->password)
        ->not->toBe('password123')
        ->and(Hash::check('password123', $user->password))->toBeTrue();
});
