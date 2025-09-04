<?php

declare(strict_types=1);

namespace Modules\User\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\User\Models\Authentication;
use Modules\User\Models\User;

/**
 * Authentication Factory
<<<<<<< HEAD
 *
=======

>>>>>>> aurmich/dev
 * @extends Factory<Authentication>
 */
class AuthenticationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
<<<<<<< HEAD
     *
=======

>>>>>>> aurmich/dev
     * @var class-string<Authentication>
     */
    protected $model = Authentication::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $loginSuccessful = $this->faker->boolean(85); // 85% success rate
        $loginAt = $this->faker->dateTimeBetween('-1 year', 'now');

        return [
            'type' => $this->faker->randomElement(['login', 'logout', 'password_reset', 'email_verification']),
            'ip_address' => $this->faker->ipv4(),
            'user_agent' => $this->faker->userAgent(),
<<<<<<< HEAD
            'login_successful' => $loginSuccessful,
            'login_at' => $loginAt,
            'logout_at' => $loginSuccessful ? $this->faker->dateTimeBetween($loginAt, 'now') : null,
=======

                : null,
>>>>>>> aurmich/dev
            'authenticatable_type' => User::class,
            'authenticatable_id' => User::factory(),
        ];
    }

    /**
     * Indicate that the authentication was successful.
<<<<<<< HEAD
=======

>>>>>>> aurmich/dev
     */
    public function successful(): static
    {
        return $this->state(fn (array $attributes): array => [
            'login_successful' => true,
        ]);
    }

    /**
     * Indicate that the authentication failed.
<<<<<<< HEAD
=======

>>>>>>> aurmich/dev
     */
    public function failed(): static
    {
        return $this->state(fn (array $attributes): array => [
            'login_successful' => false,
            'logout_at' => null,
        ]);
    }

    /**
     * Set the authentication type to login.
<<<<<<< HEAD
=======

>>>>>>> aurmich/dev
     */
    public function login(): static
    {
        return $this->state(fn (array $attributes): array => [
            'type' => 'login',
        ]);
    }

    /**
     * Set the authentication type to logout.
<<<<<<< HEAD
=======

>>>>>>> aurmich/dev
     */
    public function logout(): static
    {
        return $this->state(fn (array $attributes): array => [
            'type' => 'logout',
            'logout_at' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ]);
    }

    /**
     * Create authentication record for a specific user.
<<<<<<< HEAD
=======

>>>>>>> aurmich/dev
     */
    public function forUser(User $user): static
    {
        return $this->state(fn (array $attributes): array => [
            'authenticatable_type' => User::class,
            'authenticatable_id' => $user->id,
        ]);
    }
<<<<<<< HEAD
}
=======

>>>>>>> aurmich/dev
