<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
use Modules\User\Models\Permission;
use Modules\User\Models\Role;
=======
use Modules\User\Models\Role;
use Modules\User\Models\Permission;
use Modules\User\Models\User;
>>>>>>> 8055579 (.)
=======
use Modules\User\Models\Role;
use Modules\User\Models\Permission;
use Modules\User\Models\User;
>>>>>>> 8d82f8c (.)

uses(Tests\TestCase::class);

beforeEach(function (): void {
    $this->role = Role::factory()->create([
        'name' => 'test-role',
        'guard_name' => 'web',
    ]);
});

test('role can be created', function (): void {
    expect($this->role)->toBeInstanceOf(Role::class);
    expect($this->role->name)->toBe('test-role');
    expect($this->role->guard_name)->toBe('web');
});

test('role has correct constants', function (): void {
    expect(Role::ROLE_ADMINISTRATOR)->toBe(1);
    expect(Role::ROLE_OWNER)->toBe(2);
    expect(Role::ROLE_USER)->toBe(3);
});

test('role has correct table configuration', function (): void {
    $table = $this->role->getTable();
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 8055579 (.)
=======
    
>>>>>>> 8d82f8c (.)
    expect($table)->toBeString();
    expect($table)->not->toBeEmpty();
});

test('role has correct casts', function (): void {
    $casts = $this->role->getCasts();
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 8055579 (.)
=======
    
>>>>>>> 8d82f8c (.)
    expect($casts)->toHaveKey('id');
    expect($casts)->toHaveKey('uuid');
    expect($casts)->toHaveKey('name');
    expect($casts)->toHaveKey('guard_name');
    expect($casts)->toHaveKey('created_at');
    expect($casts)->toHaveKey('updated_at');
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 8055579 (.)
=======
    
>>>>>>> 8d82f8c (.)
    expect($casts['id'])->toBe('string');
    expect($casts['uuid'])->toBe('string');
    expect($casts['name'])->toBe('string');
    expect($casts['guard_name'])->toBe('string');
    expect($casts['created_at'])->toBe('datetime');
    expect($casts['updated_at'])->toBe('datetime');
});

test('role can be updated', function (): void {
    $this->role->update([
        'name' => 'updated-role',
        'guard_name' => 'api',
    ]);
<<<<<<< HEAD
<<<<<<< HEAD

    $this->role->refresh();

=======
    
    $this->role->refresh();
    
>>>>>>> 8055579 (.)
=======
    
    $this->role->refresh();
    
>>>>>>> 8d82f8c (.)
    expect($this->role->name)->toBe('updated-role');
    expect($this->role->guard_name)->toBe('api');
});

test('role can be deleted', function (): void {
    $roleId = $this->role->id;
<<<<<<< HEAD
<<<<<<< HEAD

    $this->role->delete();

=======
    
    $this->role->delete();
    
>>>>>>> 8055579 (.)
=======
    
    $this->role->delete();
    
>>>>>>> 8d82f8c (.)
    expect(Role::find($roleId))->toBeNull();
});

test('role can have permissions', function (): void {
    $permission = Permission::factory()->create([
        'name' => 'test-permission',
        'guard_name' => 'web',
    ]);
<<<<<<< HEAD
<<<<<<< HEAD

    $this->role->givePermissionTo($permission);

=======
    
    $this->role->givePermissionTo($permission);
    
>>>>>>> 8055579 (.)
=======
    
    $this->role->givePermissionTo($permission);
    
>>>>>>> 8d82f8c (.)
    expect($this->role->hasPermissionTo($permission))->toBeTrue();
    expect($this->role->permissions)->toHaveCount(1);
});

test('role can have multiple permissions', function (): void {
    $permission1 = Permission::factory()->create(['name' => 'permission-1']);
    $permission2 = Permission::factory()->create(['name' => 'permission-2']);
<<<<<<< HEAD
<<<<<<< HEAD

    $this->role->syncPermissions([$permission1, $permission2]);

=======
    
    $this->role->syncPermissions([$permission1, $permission2]);
    
>>>>>>> 8055579 (.)
=======
    
    $this->role->syncPermissions([$permission1, $permission2]);
    
>>>>>>> 8d82f8c (.)
    expect($this->role->permissions)->toHaveCount(2);
    expect($this->role->hasPermissionTo($permission1))->toBeTrue();
    expect($this->role->hasPermissionTo($permission2))->toBeTrue();
});

test('role can revoke permissions', function (): void {
    $permission = Permission::factory()->create(['name' => 'test-permission']);
<<<<<<< HEAD
<<<<<<< HEAD

    $this->role->givePermissionTo($permission);
    expect($this->role->hasPermissionTo($permission))->toBeTrue();

=======
    
    $this->role->givePermissionTo($permission);
    expect($this->role->hasPermissionTo($permission))->toBeTrue();
    
>>>>>>> 8055579 (.)
=======
    
    $this->role->givePermissionTo($permission);
    expect($this->role->hasPermissionTo($permission))->toBeTrue();
    
>>>>>>> 8d82f8c (.)
    $this->role->revokePermissionTo($permission);
    expect($this->role->hasPermissionTo($permission))->toBeFalse();
});

test('role can be found by name', function (): void {
    $foundRole = Role::where('name', 'test-role')->first();
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 8055579 (.)
=======
    
>>>>>>> 8d82f8c (.)
    expect($foundRole)->toBeInstanceOf(Role::class);
    expect($foundRole->id)->toBe($this->role->id);
});

test('role can be found by guard', function (): void {
    $webRoles = Role::where('guard_name', 'web')->get();
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 8055579 (.)
=======
    
>>>>>>> 8d82f8c (.)
    expect($webRoles)->toHaveCount(1);
    expect($webRoles->first()->id)->toBe($this->role->id);
});

test('role has timestamps', function (): void {
    expect($this->role->created_at)->not->toBeNull();
    expect($this->role->updated_at)->not->toBeNull();
});

test('role can be created with factory', function (): void {
    $role = Role::factory()->create();
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 8055579 (.)
=======
    
>>>>>>> 8d82f8c (.)
    expect($role)->toBeInstanceOf(Role::class);
    expect($role->name)->not->toBeEmpty();
    expect($role->guard_name)->not->toBeEmpty();
});

test('role can be created with specific attributes', function (): void {
    $role = Role::factory()->create([
        'name' => 'custom-role',
        'guard_name' => 'custom-guard',
    ]);
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 8055579 (.)
=======
    
>>>>>>> 8d82f8c (.)
    expect($role->name)->toBe('custom-role');
    expect($role->guard_name)->toBe('custom-guard');
});

test('role can check if it has any permissions', function (): void {
    expect($this->role->hasAnyPermission([]))->toBeFalse();
<<<<<<< HEAD
<<<<<<< HEAD

    $permission = Permission::factory()->create(['name' => 'test-permission']);
    $this->role->givePermissionTo($permission);

=======
    
    $permission = Permission::factory()->create(['name' => 'test-permission']);
    $this->role->givePermissionTo($permission);
    
>>>>>>> 8055579 (.)
=======
    
    $permission = Permission::factory()->create(['name' => 'test-permission']);
    $this->role->givePermissionTo($permission);
    
>>>>>>> 8d82f8c (.)
    expect($this->role->hasAnyPermission([$permission]))->toBeTrue();
});

test('role can check if it has all permissions', function (): void {
    $permission1 = Permission::factory()->create(['name' => 'permission-1']);
    $permission2 = Permission::factory()->create(['name' => 'permission-2']);
<<<<<<< HEAD
<<<<<<< HEAD

    $this->role->syncPermissions([$permission1, $permission2]);

=======
    
    $this->role->syncPermissions([$permission1, $permission2]);
    
>>>>>>> 8055579 (.)
=======
    
    $this->role->syncPermissions([$permission1, $permission2]);
    
>>>>>>> 8d82f8c (.)
    expect($this->role->hasAllPermissions([$permission1, $permission2]))->toBeTrue();
    expect($this->role->hasAllPermissions([$permission1]))->toBeTrue();
    expect($this->role->hasAllPermissions([$permission1, $permission2, 'non-existent']))->toBeFalse();
});
