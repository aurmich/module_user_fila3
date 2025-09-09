<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\User\Tests\Unit\Models;

use Modules\User\Models\BaseUser;
use Modules\User\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Model;

uses(TestCase::class, RefreshDatabase::class);

beforeEach(function () {
    $this->baseUser = new class extends BaseUser {
=======
namespace Modules\User\Tests\Unit\Models\BaseUserTest;

=======
>>>>>>> 9d96960 (.)
namespace Modules\User\Tests\Unit\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\User\Models\BaseUser;
use Modules\User\Tests\TestCase;

<<<<<<< HEAD
>>>>>>> 079c9da (.)
=======
uses(TestCase::class, RefreshDatabase::class);

beforeEach(function () {
    $this->baseUser = new class extends BaseUser
    {
>>>>>>> 9d96960 (.)
        protected $table = 'test_users';
    };
});

test('base user extends eloquent model', function () {
    expect($this->baseUser)->toBeInstanceOf(Model::class);
});

test('base user has correct table name', function () {
    expect($this->baseUser->getTable())->toBe('test_users');
});

test('base user can be instantiated', function () {
    expect($this->baseUser)->toBeInstanceOf(BaseUser::class);
});

test('base user has proper inheritance chain', function () {
    expect($this->baseUser)->toBeInstanceOf(BaseUser::class);
    expect($this->baseUser)->toBeInstanceOf(Model::class);
});

test('base user has authentication traits', function () {
    $traits = class_uses($this->baseUser);
<<<<<<< HEAD
    
=======

>>>>>>> 079c9da (.)
    expect($traits)->toContain(\Illuminate\Foundation\Auth\User::class);
    expect($traits)->toContain(\Illuminate\Notifications\Notifiable::class);
});
