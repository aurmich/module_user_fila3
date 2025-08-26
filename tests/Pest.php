<?php

declare(strict_types=1);

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Modules\User\Tests\TestCase;

/*
|--------------------------------------------------------------------------
| Test Configuration
|--------------------------------------------------------------------------
|
| This file configures Pest testing for the User module.
| It sets up the test environment, custom expectations, and helper functions.
|
*/

uses(
    TestCase::class,
    RefreshDatabase::class,
    WithFaker::class,
)->in('Feature', 'Unit');

uses()->group('user')->in('Feature', 'Unit');

/*
|--------------------------------------------------------------------------
| Custom Expectations
|--------------------------------------------------------------------------
|
| Custom expectations for the User module models and relationships.
|
*/

expect()->extend('toBeUser', function () {
    return $this->toBeInstanceOf(\Modules\User\Models\User::class);
});

expect()->extend('toBeTeam', function () {
    return $this->toBeInstanceOf(\Modules\User\Models\Team::class);
});

expect()->extend('toBeProfile', function () {
    return $this->toBeInstanceOf(\Modules\User\Models\Profile::class);
});

expect()->extend('toBeRole', function () {
    return $this->toBeInstanceOf(\Modules\User\Models\Role::class);
});

expect()->extend('toHaveRole', function (string $roleName) {
    return $this->value->hasRole($roleName);
});

expect()->extend('toHavePermission', function (string $permissionName) {
    return $this->value->hasPermissionTo($permissionName);
});

/*
|--------------------------------------------------------------------------
| Helper Functions
|--------------------------------------------------------------------------
|
| Helper functions for creating test data in the User module.
|
*/

function createUser(array $attributes = []): \Modules\User\Models\User
{
    return \Modules\User\Models\User::factory()->create($attributes);
}

function makeUser(array $attributes = []): \Modules\User\Models\User
{
    return \Modules\User\Models\User::factory()->make($attributes);
}

function createTeam(array $attributes = []): \Modules\User\Models\Team
{
    return \Modules\User\Models\Team::factory()->create($attributes);
}

function createProfile(array $attributes = []): \Modules\User\Models\Profile
{
    return \Modules\User\Models\Profile::factory()->create($attributes);
}

function createRole(array $attributes = []): \Modules\User\Models\Role
{
    return \Modules\User\Models\Role::factory()->create($attributes);
}

function createPermission(array $attributes = []): \Modules\User\Models\Permission
{
    return \Modules\User\Models\Permission::factory()->create($attributes);
}

function createTenant(array $attributes = []): \Modules\User\Models\Tenant
{
    return \Modules\User\Models\Tenant::factory()->create($attributes);
}

function createTeamUser(array $attributes = []): \Modules\User\Models\TeamUser
{
    return \Modules\User\Models\TeamUser::factory()->create($attributes);
}

function createTeamPermission(array $attributes = []): \Modules\User\Models\TeamPermission
{
    return \Modules\User\Models\TeamPermission::factory()->create($attributes);
}

function createModelHasRole(array $attributes = []): \Modules\User\Models\ModelHasRole
{
    return \Modules\User\Models\ModelHasRole::factory()->create($attributes);
}

function createModelHasPermission(array $attributes = []): \Modules\User\Models\ModelHasPermission
{
    return \Modules\User\Models\ModelHasPermission::factory()->create($attributes);
}