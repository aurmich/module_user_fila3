<?php

declare(strict_types=1);

namespace Modules\User\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\User\Models\Permission;
use Modules\User\Models\PermissionRole;
=======
use Modules\User\Models\PermissionRole;
use Modules\User\Models\Permission;
>>>>>>> 8055579 (.)
=======
use Modules\User\Models\PermissionRole;
use Modules\User\Models\Permission;
>>>>>>> 8d82f8c (.)
use Modules\User\Models\Role;

/**
 * PermissionRole Factory
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * Factory for creating PermissionRole model instances for testing and seeding.
 *
=======
 * 
 * Factory for creating PermissionRole model instances for testing and seeding.
 * 
>>>>>>> 8055579 (.)
=======
 * 
 * Factory for creating PermissionRole model instances for testing and seeding.
 * 
>>>>>>> 8d82f8c (.)
 * @extends Factory<PermissionRole>
 */
class PermissionRoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 8055579 (.)
=======
     * 
>>>>>>> 8d82f8c (.)
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
            'permission_id' => Permission::factory(),
            'role_id' => Role::factory(),
        ];
    }

    /**
     * Create permission-role relationship for a specific permission.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @param Permission $permission
     * @return static
>>>>>>> 8055579 (.)
=======
     *
     * @param Permission $permission
     * @return static
>>>>>>> 8d82f8c (.)
     */
    public function forPermission(Permission $permission): static
    {
        return $this->state(fn (array $attributes): array => [
            'permission_id' => $permission->id,
        ]);
    }

    /**
     * Create permission-role relationship for a specific role.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @param Role $role
     * @return static
>>>>>>> 8055579 (.)
=======
     *
     * @param Role $role
     * @return static
>>>>>>> 8d82f8c (.)
     */
    public function forRole(Role $role): static
    {
        return $this->state(fn (array $attributes): array => [
            'role_id' => $role->id,
        ]);
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> 8055579 (.)
=======
}
>>>>>>> 8d82f8c (.)
