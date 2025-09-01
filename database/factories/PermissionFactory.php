<?php

declare(strict_types=1);

namespace Modules\User\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\User\Models\Permission;
use Modules\Xot\Actions\Cast\SafeStringCastAction;

/**
 * Factory per il modello Permission del modulo User.
 *
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\User\Models\Permission>
 */
class PermissionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Modules\User\Models\Permission>
     */
    protected $model = Permission::class;

    /**
     * Definisce lo stato di default del modello.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $actions = ['create', 'read', 'update', 'delete', 'manage', 'view', 'edit'];
        $resources = ['users', 'posts', 'comments', 'pages', 'settings', 'reports', 'analytics', 'teams', 'roles', 'permissions'];

        $action = SafeStringCastAction::cast($this->faker->randomElement($actions));
        $resource = SafeStringCastAction::cast($this->faker->randomElement($resources));

        return [
<<<<<<< HEAD
<<<<<<< HEAD
            'name' => $action.' '.$resource,
=======
            'name' => $action . ' ' . $resource,
>>>>>>> 8055579 (.)
=======
            'name' => $action . ' ' . $resource,
>>>>>>> 8d82f8c (.)
            'guard_name' => 'web',
        ];
    }

    /**
     * Crea un set di permessi CRUD per una risorsa.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @param string $resource
     * @return static
>>>>>>> 8055579 (.)
=======
     *
     * @param string $resource
     * @return static
>>>>>>> 8d82f8c (.)
     */
    public function forResource(string $resource): static
    {
        return $this->state(fn (array $attributes) => [
<<<<<<< HEAD
<<<<<<< HEAD
            'name' => SafeStringCastAction::cast($this->faker->randomElement(['create', 'read', 'update', 'delete'])).' '.$resource,
=======
            'name' => SafeStringCastAction::cast($this->faker->randomElement(['create', 'read', 'update', 'delete'])) . ' ' . $resource,
>>>>>>> 8055579 (.)
=======
            'name' => SafeStringCastAction::cast($this->faker->randomElement(['create', 'read', 'update', 'delete'])) . ' ' . $resource,
>>>>>>> 8d82f8c (.)
        ]);
    }

    /**
     * Crea un permesso di lettura.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return static
>>>>>>> 8055579 (.)
=======
     *
     * @return static
>>>>>>> 8d82f8c (.)
     */
    public function read(): static
    {
        return $this->state(fn (array $attributes) => [
<<<<<<< HEAD
<<<<<<< HEAD
            'name' => 'read '.SafeStringCastAction::cast($this->faker->randomElement(['users', 'posts', 'comments', 'pages'])),
=======
            'name' => 'read ' . SafeStringCastAction::cast($this->faker->randomElement(['users', 'posts', 'comments', 'pages'])),
>>>>>>> 8055579 (.)
=======
            'name' => 'read ' . SafeStringCastAction::cast($this->faker->randomElement(['users', 'posts', 'comments', 'pages'])),
>>>>>>> 8d82f8c (.)
        ]);
    }

    /**
     * Crea un permesso di scrittura.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return static
>>>>>>> 8055579 (.)
=======
     *
     * @return static
>>>>>>> 8d82f8c (.)
     */
    public function write(): static
    {
        return $this->state(fn (array $attributes) => [
<<<<<<< HEAD
<<<<<<< HEAD
            'name' => SafeStringCastAction::cast($this->faker->randomElement(['create', 'update', 'delete'])).' '.SafeStringCastAction::cast($this->faker->randomElement(['users', 'posts', 'comments', 'pages'])),
=======
            'name' => SafeStringCastAction::cast($this->faker->randomElement(['create', 'update', 'delete'])) . ' ' . SafeStringCastAction::cast($this->faker->randomElement(['users', 'posts', 'comments', 'pages'])),
>>>>>>> 8055579 (.)
=======
            'name' => SafeStringCastAction::cast($this->faker->randomElement(['create', 'update', 'delete'])) . ' ' . SafeStringCastAction::cast($this->faker->randomElement(['users', 'posts', 'comments', 'pages'])),
>>>>>>> 8d82f8c (.)
        ]);
    }

    /**
     * Crea un permesso admin.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return static
>>>>>>> 8055579 (.)
=======
     *
     * @return static
>>>>>>> 8d82f8c (.)
     */
    public function admin(): static
    {
        return $this->state(fn (array $attributes) => [
<<<<<<< HEAD
<<<<<<< HEAD
            'name' => 'manage '.SafeStringCastAction::cast($this->faker->randomElement(['users', 'system', 'settings', 'permissions'])),
=======
            'name' => 'manage ' . SafeStringCastAction::cast($this->faker->randomElement(['users', 'system', 'settings', 'permissions'])),
>>>>>>> 8055579 (.)
=======
            'name' => 'manage ' . SafeStringCastAction::cast($this->faker->randomElement(['users', 'system', 'settings', 'permissions'])),
>>>>>>> 8d82f8c (.)
        ]);
    }

    /**
     * Crea un permesso con un guard specifico.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @param string $guard
     * @return static
>>>>>>> 8055579 (.)
=======
     *
     * @param string $guard
     * @return static
>>>>>>> 8d82f8c (.)
     */
    public function withGuard(string $guard): static
    {
        return $this->state(fn (array $attributes) => [
            'guard_name' => $guard,
        ]);
    }
}
