<?php

declare(strict_types=1);

namespace Modules\User\Tests\Unit\Models;

<<<<<<< HEAD
use Illuminate\Foundation\Testing\DatabaseTransactions;
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> 8055579 (.)
use Modules\User\Models\Permission;
use Tests\TestCase;

class PermissionTest extends TestCase
{
<<<<<<< HEAD

=======
    use RefreshDatabase;
>>>>>>> 8055579 (.)

    public function test_can_create_permission_with_minimal_data(): void
    {
        $permission = Permission::factory()->create([
            'name' => 'test.permission',
            'guard_name' => 'web',
        ]);

        $this->assertDatabaseHas('permissions', [
            'id' => $permission->id,
            'name' => 'test.permission',
            'guard_name' => 'web',
        ]);
    }

    public function test_can_create_permission_with_all_fields(): void
    {
        $permissionData = [
            'name' => 'full.permission',
            'guard_name' => 'web',
            'created_by' => 'user123',
            'updated_by' => 'user456',
        ];

        $permission = Permission::factory()->create($permissionData);

        $this->assertDatabaseHas('permissions', [
            'id' => $permission->id,
            'name' => 'full.permission',
            'guard_name' => 'web',
            'created_by' => 'user123',
            'updated_by' => 'user456',
        ]);
    }

    public function test_permission_has_connection_attribute(): void
    {
<<<<<<< HEAD
        $permission = new Permission;

        expect('user', $permission->connection);
=======
        $permission = new Permission();

        $this->assertEquals('user', $permission->connection);
>>>>>>> 8055579 (.)
    }

    public function test_permission_has_key_type_attribute(): void
    {
<<<<<<< HEAD
        $permission = new Permission;

        expect('string', $permission->keyType);
=======
        $permission = new Permission();

        $this->assertEquals('string', $permission->keyType);
>>>>>>> 8055579 (.)
    }

    public function test_permission_has_fillable_attributes(): void
    {
<<<<<<< HEAD
        $permission = new Permission;
=======
        $permission = new Permission();
>>>>>>> 8055579 (.)

        $expectedFillable = [
            'id',
            'name',
            'guard_name',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
        ];

<<<<<<< HEAD
        expect($expectedFillable, $permission->getFillable());
=======
        $this->assertEquals($expectedFillable, $permission->getFillable());
>>>>>>> 8055579 (.)
    }

    public function test_permission_has_casts(): void
    {
<<<<<<< HEAD
        $permission = new Permission;
=======
        $permission = new Permission();
>>>>>>> 8055579 (.)

        $expectedCasts = [
            'id' => 'string',
            'uuid' => 'string',
            'name' => 'string',
            'guard_name' => 'string',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];

<<<<<<< HEAD
        expect($expectedCasts, $permission->getCasts());
=======
        $this->assertEquals($expectedCasts, $permission->getCasts());
>>>>>>> 8055579 (.)
    }

    public function test_can_find_permission_by_name(): void
    {
        $permission = Permission::factory()->create(['name' => 'unique.permission']);

        $foundPermission = Permission::where('name', 'unique.permission')->first();

<<<<<<< HEAD
        expect($foundPermission);
        expect($permission->id, $foundPermission->id);
=======
        $this->assertNotNull($foundPermission);
        $this->assertEquals($permission->id, $foundPermission->id);
>>>>>>> 8055579 (.)
    }

    public function test_can_find_permission_by_guard_name(): void
    {
        Permission::factory()->create(['guard_name' => 'web']);
        Permission::factory()->create(['guard_name' => 'api']);
        Permission::factory()->create(['guard_name' => 'web']);

        $webPermissions = Permission::where('guard_name', 'web')->get();

<<<<<<< HEAD
        expect(2, $webPermissions);
        expect($webPermissions->every(fn ($permission) => $permission->guard_name === 'web'));
=======
        $this->assertCount(2, $webPermissions);
        $this->assertTrue($webPermissions->every(fn ($permission) => $permission->guard_name === 'web'));
>>>>>>> 8055579 (.)
    }

    public function test_can_find_permission_by_created_by(): void
    {
        $permission = Permission::factory()->create(['created_by' => 'user123']);

        $foundPermission = Permission::where('created_by', 'user123')->first();

<<<<<<< HEAD
        expect($foundPermission);
        expect($permission->id, $foundPermission->id);
=======
        $this->assertNotNull($foundPermission);
        $this->assertEquals($permission->id, $foundPermission->id);
>>>>>>> 8055579 (.)
    }

    public function test_can_find_permission_by_updated_by(): void
    {
        $permission = Permission::factory()->create(['updated_by' => 'user456']);

        $foundPermission = Permission::where('updated_by', 'user456')->first();

<<<<<<< HEAD
        expect($foundPermission);
        expect($permission->id, $foundPermission->id);
=======
        $this->assertNotNull($foundPermission);
        $this->assertEquals($permission->id, $foundPermission->id);
>>>>>>> 8055579 (.)
    }

    public function test_can_find_permissions_by_name_pattern(): void
    {
        Permission::factory()->create(['name' => 'user.create']);
        Permission::factory()->create(['name' => 'user.update']);
        Permission::factory()->create(['name' => 'user.delete']);
        Permission::factory()->create(['name' => 'post.read']);

        $userPermissions = Permission::where('name', 'like', 'user.%')->get();

<<<<<<< HEAD
        expect(3, $userPermissions);
        expect($userPermissions->every(fn ($permission) => str_starts_with($permission->name, 'user.')));
=======
        $this->assertCount(3, $userPermissions);
        $this->assertTrue($userPermissions->every(fn ($permission) => str_starts_with($permission->name, 'user.')));
>>>>>>> 8055579 (.)
    }

    public function test_can_update_permission(): void
    {
        $permission = Permission::factory()->create(['name' => 'old.permission']);

        $permission->update(['name' => 'new.permission']);

        $this->assertDatabaseHas('permissions', [
            'id' => $permission->id,
            'name' => 'new.permission',
        ]);
    }

    public function test_can_handle_null_values(): void
    {
        $permission = Permission::factory()->create([
            'name' => 'test.permission',
            'guard_name' => 'web',
            'created_by' => null,
            'updated_by' => null,
        ]);

        $this->assertDatabaseHas('permissions', [
            'id' => $permission->id,
            'created_by' => null,
            'updated_by' => null,
        ]);
    }

    public function test_can_find_permissions_by_multiple_criteria(): void
    {
        Permission::factory()->create([
            'name' => 'admin.user.create',
            'guard_name' => 'web',
            'created_by' => 'admin',
        ]);

        Permission::factory()->create([
            'name' => 'admin.user.update',
            'guard_name' => 'api',
            'created_by' => 'admin',
        ]);

        $permissions = Permission::where('name', 'like', 'admin.user.%')
            ->where('created_by', 'admin')
            ->get();

<<<<<<< HEAD
        expect(2, $permissions);
        expect($permissions->every(fn ($permission) => str_starts_with($permission->name, 'admin.user.') && $permission->created_by === 'admin'
=======
        $this->assertCount(2, $permissions);
        $this->assertTrue($permissions->every(fn ($permission) => 
            str_starts_with($permission->name, 'admin.user.') && $permission->created_by === 'admin'
>>>>>>> 8055579 (.)
        ));
    }

    public function test_permission_has_roles_relationship(): void
    {
        $permission = Permission::factory()->create();

<<<<<<< HEAD
        expect(method_exists($permission, 'roles'));
=======
        $this->assertTrue(method_exists($permission, 'roles'));
>>>>>>> 8055579 (.)
    }

    public function test_permission_has_users_relationship(): void
    {
        $permission = Permission::factory()->create();

<<<<<<< HEAD
        expect(method_exists($permission, 'users'));
=======
        $this->assertTrue(method_exists($permission, 'users'));
>>>>>>> 8055579 (.)
    }

    public function test_permission_can_use_role_scopes(): void
    {
        $permission = Permission::factory()->create();

<<<<<<< HEAD
        expect(method_exists($permission, 'role'));
=======
        $this->assertTrue(method_exists($permission, 'role'));
>>>>>>> 8055579 (.)
    }

    public function test_permission_can_use_permission_scopes(): void
    {
        $permission = Permission::factory()->create();

<<<<<<< HEAD
        expect(method_exists($permission, 'permission'));
        expect(method_exists($permission, 'withoutPermission'));
=======
        $this->assertTrue(method_exists($permission, 'permission'));
        $this->assertTrue(method_exists($permission, 'withoutPermission'));
>>>>>>> 8055579 (.)
    }

    public function test_permission_can_use_without_role_scopes(): void
    {
        $permission = Permission::factory()->create();

<<<<<<< HEAD
        expect(method_exists($permission, 'withoutRole'));
=======
        $this->assertTrue(method_exists($permission, 'withoutRole'));
>>>>>>> 8055579 (.)
    }

    public function test_permission_has_factory_method(): void
    {
<<<<<<< HEAD
        $permission = new Permission;

        expect(method_exists($permission, 'newFactory'));
=======
        $permission = new Permission();

        $this->assertTrue(method_exists($permission, 'newFactory'));
>>>>>>> 8055579 (.)
    }

    public function test_permission_has_get_table_method(): void
    {
<<<<<<< HEAD
        $permission = new Permission;

        expect(method_exists($permission, 'getTable'));
    }
}
<<<<<<< HEAD
=======
        $permission = new Permission();

        $this->assertTrue(method_exists($permission, 'getTable'));
    }
}
>>>>>>> 8055579 (.)



<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 8a21b63 (.)
=======

=======
>>>>>>> a0c18bc (.)
>>>>>>> 8055579 (.)
=======
>>>>>>> d51888e (.)
=======

=======
>>>>>>> a0c18bc (.)
>>>>>>> 8055579 (.)
=======

=======
>>>>>>> a0c18bc (.)
=======
>>>>>>> 933fcfe (.)
>>>>>>> e67649e (.)
=======

>>>>>>> 7113f04 (.)
