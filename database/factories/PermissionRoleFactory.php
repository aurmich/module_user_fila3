<?php

declare(strict_types=1);

namespace Modules\User\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD
use Modules\User\Models\Permission;
use Modules\User\Models\PermissionRole;
=======
use Modules\User\Models\PermissionRole;
use Modules\User\Models\Permission;
>>>>>>> 079c9da7 (.)
use Modules\User\Models\Role;

/**
 * PermissionRole Factory
<<<<<<< HEAD
 *
 * Factory for creating PermissionRole model instances for testing and seeding.
 *
=======
 * 
 * Factory for creating PermissionRole model instances for testing and seeding.
 * 
>>>>>>> 079c9da7 (.)
 * @extends Factory<PermissionRole>
 */
class PermissionRoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 079c9da7 (.)
     * @var class-string<PermissionRole>
     */
    protected $model = PermissionRole::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
<<<<<<< HEAD
            'permission_id' => fn() => Permission::create([
                'name' => fake()->unique()->slug(),
                'guard_name' => 'web',
            ])->id,
            'role_id' => fn() => Role::create([
                'name' => fake()->unique()->slug(),
                'guard_name' => 'web',
            ])->id,
=======
            'permission_id' => Permission::factory(),
            'role_id' => Role::factory(),
>>>>>>> 079c9da7 (.)
        ];
    }

    /**
     * Create permission-role relationship for a specific permission.
     *
     * @param Permission $permission
     * @return static
     */
    public function forPermission(Permission $permission): static
    {
<<<<<<< HEAD
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> 079c9da7 (.)
            'permission_id' => $permission->id,
        ]);
    }

    /**
     * Create permission-role relationship for a specific role.
     *
     * @param Role $role
     * @return static
     */
    public function forRole(Role $role): static
    {
<<<<<<< HEAD
        return $this->state(fn(array $_attributes): array => [
            'role_id' => $role->id,
        ]);
    }
}
=======
        return $this->state(fn (array $attributes): array => [
            'role_id' => $role->id,
        ]);
    }
}
>>>>>>> 079c9da7 (.)
