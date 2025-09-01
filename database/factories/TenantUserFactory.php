<?php

declare(strict_types=1);

namespace Modules\User\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD
use Modules\User\Models\Tenant;
use Modules\User\Models\TenantUser;
=======
use Modules\User\Models\TenantUser;
use Modules\User\Models\Tenant;
>>>>>>> 8055579 (.)
use Modules\User\Models\User;

/**
 * TenantUser Factory
<<<<<<< HEAD
 *
 * Factory for creating TenantUser model instances for testing and seeding.
 *
=======
 * 
 * Factory for creating TenantUser model instances for testing and seeding.
 * 
>>>>>>> 8055579 (.)
 * @extends Factory<TenantUser>
 */
class TenantUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 8055579 (.)
     * @var class-string<TenantUser>
     */
    protected $model = TenantUser::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tenant_id' => Tenant::factory(),
            'user_id' => User::factory(),
        ];
    }

    /**
     * Create tenant-user relationship for a specific tenant.
<<<<<<< HEAD
=======
     *
     * @param Tenant $tenant
     * @return static
>>>>>>> 8055579 (.)
     */
    public function forTenant(Tenant $tenant): static
    {
        return $this->state(fn (array $attributes): array => [
            'tenant_id' => $tenant->id,
        ]);
    }

    /**
     * Create tenant-user relationship for a specific user.
<<<<<<< HEAD
=======
     *
     * @param User $user
     * @return static
>>>>>>> 8055579 (.)
     */
    public function forUser(User $user): static
    {
        return $this->state(fn (array $attributes): array => [
            'user_id' => $user->id,
        ]);
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 8055579 (.)
