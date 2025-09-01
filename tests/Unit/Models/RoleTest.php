<?php

declare(strict_types=1);

namespace Modules\User\Tests\Unit\Models;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Foundation\Testing\DatabaseTransactions;
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> 8055579 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> 8d82f8c (.)
use Modules\User\Models\Role;
use Modules\User\Models\Team;
use Tests\TestCase;

class RoleTest extends TestCase
{
<<<<<<< HEAD
<<<<<<< HEAD

=======
    use RefreshDatabase;
>>>>>>> 8055579 (.)
=======
    use RefreshDatabase;
>>>>>>> 8d82f8c (.)

    public function test_can_create_role_with_minimal_data(): void
    {
        $role = Role::factory()->create([
            'name' => 'Test Role',
            'guard_name' => 'web',
        ]);

        $this->assertDatabaseHas('roles', [
            'id' => $role->id,
            'name' => 'Test Role',
            'guard_name' => 'web',
        ]);
    }

    public function test_can_create_role_with_all_fields(): void
    {
        $team = Team::factory()->create();
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8055579 (.)
=======
        
>>>>>>> 8d82f8c (.)
        $roleData = [
            'name' => 'Full Role',
            'guard_name' => 'web',
            'team_id' => $team->id,
            'uuid' => '550e8400-e29b-41d4-a716-446655440000',
        ];

        $role = Role::factory()->create($roleData);

        $this->assertDatabaseHas('roles', [
            'id' => $role->id,
            'name' => 'Full Role',
            'guard_name' => 'web',
            'team_id' => $team->id,
            'uuid' => '550e8400-e29b-41d4-a716-446655440000',
        ]);
    }

    public function test_role_has_connection_attribute(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $role = new Role;

        expect('user', $role->connection);
=======
        $role = new Role();

        $this->assertEquals('user', $role->connection);
>>>>>>> 8055579 (.)
=======
        $role = new Role();

        $this->assertEquals('user', $role->connection);
>>>>>>> 8d82f8c (.)
    }

    public function test_role_has_key_type_attribute(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $role = new Role;

        expect('string', $role->keyType);
=======
        $role = new Role();

        $this->assertEquals('string', $role->keyType);
>>>>>>> 8055579 (.)
=======
        $role = new Role();

        $this->assertEquals('string', $role->keyType);
>>>>>>> 8d82f8c (.)
    }

    public function test_role_constants_are_defined(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        expect(1, Role::ROLE_ADMINISTRATOR);
        expect(2, Role::ROLE_OWNER);
        expect(3, Role::ROLE_USER);
=======
        $this->assertEquals(1, Role::ROLE_ADMINISTRATOR);
        $this->assertEquals(2, Role::ROLE_OWNER);
        $this->assertEquals(3, Role::ROLE_USER);
>>>>>>> 8055579 (.)
=======
        $this->assertEquals(1, Role::ROLE_ADMINISTRATOR);
        $this->assertEquals(2, Role::ROLE_OWNER);
        $this->assertEquals(3, Role::ROLE_USER);
>>>>>>> 8d82f8c (.)
    }

    public function test_can_find_role_by_name(): void
    {
        $role = Role::factory()->create(['name' => 'Unique Role Name']);

        $foundRole = Role::where('name', 'Unique Role Name')->first();

<<<<<<< HEAD
<<<<<<< HEAD
        expect($foundRole);
        expect($role->id, $foundRole->id);
=======
        $this->assertNotNull($foundRole);
        $this->assertEquals($role->id, $foundRole->id);
>>>>>>> 8055579 (.)
=======
        $this->assertNotNull($foundRole);
        $this->assertEquals($role->id, $foundRole->id);
>>>>>>> 8d82f8c (.)
    }

    public function test_can_find_role_by_guard_name(): void
    {
        Role::factory()->create(['guard_name' => 'web']);
        Role::factory()->create(['guard_name' => 'api']);
        Role::factory()->create(['guard_name' => 'web']);

        $webRoles = Role::where('guard_name', 'web')->get();

<<<<<<< HEAD
<<<<<<< HEAD
        expect(2, $webRoles);
        expect($webRoles->every(fn ($role) => $role->guard_name === 'web'));
=======
        $this->assertCount(2, $webRoles);
        $this->assertTrue($webRoles->every(fn ($role) => $role->guard_name === 'web'));
>>>>>>> 8055579 (.)
=======
        $this->assertCount(2, $webRoles);
        $this->assertTrue($webRoles->every(fn ($role) => $role->guard_name === 'web'));
>>>>>>> 8d82f8c (.)
    }

    public function test_can_find_role_by_team_id(): void
    {
        $team = Team::factory()->create();
        $role = Role::factory()->create(['team_id' => $team->id]);

        $foundRole = Role::where('team_id', $team->id)->first();

<<<<<<< HEAD
<<<<<<< HEAD
        expect($foundRole);
        expect($role->id, $foundRole->id);
=======
        $this->assertNotNull($foundRole);
        $this->assertEquals($role->id, $foundRole->id);
>>>>>>> 8055579 (.)
=======
        $this->assertNotNull($foundRole);
        $this->assertEquals($role->id, $foundRole->id);
>>>>>>> 8d82f8c (.)
    }

    public function test_can_find_role_by_uuid(): void
    {
        $uuid = '550e8400-e29b-41d4-a716-446655440000';
        $role = Role::factory()->create(['uuid' => $uuid]);

        $foundRole = Role::where('uuid', $uuid)->first();

<<<<<<< HEAD
<<<<<<< HEAD
        expect($foundRole);
        expect($role->id, $foundRole->id);
=======
        $this->assertNotNull($foundRole);
        $this->assertEquals($role->id, $foundRole->id);
>>>>>>> 8055579 (.)
=======
        $this->assertNotNull($foundRole);
        $this->assertEquals($role->id, $foundRole->id);
>>>>>>> 8d82f8c (.)
    }

    public function test_can_find_roles_by_name_pattern(): void
    {
        Role::factory()->create(['name' => 'Admin Role']);
        Role::factory()->create(['name' => 'User Role']);
        Role::factory()->create(['name' => 'Manager Role']);

        $adminRoles = Role::where('name', 'like', '%Role%')->get();

<<<<<<< HEAD
<<<<<<< HEAD
        expect(3, $adminRoles);
        expect($adminRoles->every(fn ($role) => str_contains($role->name, 'Role')));
=======
        $this->assertCount(3, $adminRoles);
        $this->assertTrue($adminRoles->every(fn ($role) => str_contains($role->name, 'Role')));
>>>>>>> 8055579 (.)
=======
        $this->assertCount(3, $adminRoles);
        $this->assertTrue($adminRoles->every(fn ($role) => str_contains($role->name, 'Role')));
>>>>>>> 8d82f8c (.)
    }

    public function test_can_update_role(): void
    {
        $role = Role::factory()->create(['name' => 'Old Name']);

        $role->update(['name' => 'New Name']);

        $this->assertDatabaseHas('roles', [
            'id' => $role->id,
            'name' => 'New Name',
        ]);
    }

    public function test_can_handle_null_values(): void
    {
        $role = Role::factory()->create([
            'name' => 'Test Role',
            'guard_name' => 'web',
            'team_id' => null,
            'uuid' => null,
        ]);

        $this->assertDatabaseHas('roles', [
            'id' => $role->id,
            'team_id' => null,
            'uuid' => null,
        ]);
    }

    public function test_can_find_roles_by_multiple_criteria(): void
    {
        $team = Team::factory()->create();
        Role::factory()->create([
            'name' => 'Admin Role',
            'guard_name' => 'web',
            'team_id' => $team->id,
        ]);

        Role::factory()->create([
            'name' => 'User Role',
            'guard_name' => 'api',
            'team_id' => $team->id,
        ]);

        $roles = Role::where('team_id', $team->id)
            ->where('guard_name', 'web')
            ->get();

<<<<<<< HEAD
<<<<<<< HEAD
        expect(1, $roles);
        expect('Admin Role', $roles->first()->name);
        expect('web', $roles->first()->guard_name);
=======
        $this->assertCount(1, $roles);
        $this->assertEquals('Admin Role', $roles->first()->name);
        $this->assertEquals('web', $roles->first()->guard_name);
>>>>>>> 8055579 (.)
=======
        $this->assertCount(1, $roles);
        $this->assertEquals('Admin Role', $roles->first()->name);
        $this->assertEquals('web', $roles->first()->guard_name);
>>>>>>> 8d82f8c (.)
    }

    public function test_role_has_permissions_relationship(): void
    {
        $role = Role::factory()->create();

<<<<<<< HEAD
<<<<<<< HEAD
        expect(method_exists($role, 'permissions'));
=======
        $this->assertTrue(method_exists($role, 'permissions'));
>>>>>>> 8055579 (.)
=======
        $this->assertTrue(method_exists($role, 'permissions'));
>>>>>>> 8d82f8c (.)
    }

    public function test_role_has_team_relationship(): void
    {
        $role = Role::factory()->create();

<<<<<<< HEAD
<<<<<<< HEAD
        expect(method_exists($role, 'team'));
=======
        $this->assertTrue(method_exists($role, 'team'));
>>>>>>> 8055579 (.)
=======
        $this->assertTrue(method_exists($role, 'team'));
>>>>>>> 8d82f8c (.)
    }

    public function test_role_has_users_relationship(): void
    {
        $role = Role::factory()->create();

<<<<<<< HEAD
<<<<<<< HEAD
        expect(method_exists($role, 'users'));
=======
        $this->assertTrue(method_exists($role, 'users'));
>>>>>>> 8055579 (.)
=======
        $this->assertTrue(method_exists($role, 'users'));
>>>>>>> 8d82f8c (.)
    }

    public function test_role_can_use_permission_scopes(): void
    {
        $role = Role::factory()->create();

<<<<<<< HEAD
<<<<<<< HEAD
        expect(method_exists($role, 'permission'));
        expect(method_exists($role, 'withoutPermission'));
=======
        $this->assertTrue(method_exists($role, 'permission'));
        $this->assertTrue(method_exists($role, 'withoutPermission'));
>>>>>>> 8055579 (.)
=======
        $this->assertTrue(method_exists($role, 'permission'));
        $this->assertTrue(method_exists($role, 'withoutPermission'));
>>>>>>> 8d82f8c (.)
    }

    public function test_role_can_use_role_scopes(): void
    {
        $role = Role::factory()->create();

<<<<<<< HEAD
<<<<<<< HEAD
        expect(method_exists($role, 'role'));
        expect(method_exists($role, 'withoutRole'));
    }
}
<<<<<<< HEAD
=======
        $this->assertTrue(method_exists($role, 'role'));
        $this->assertTrue(method_exists($role, 'withoutRole'));
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
=======
        $this->assertTrue(method_exists($role, 'role'));
        $this->assertTrue(method_exists($role, 'withoutRole'));
    }
}




>>>>>>> 8d82f8c (.)
