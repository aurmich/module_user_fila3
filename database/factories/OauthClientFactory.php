<?php

declare(strict_types=1);

namespace Modules\User\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\User\Models\OauthClient;
use Modules\User\Models\User;

/**
 * OauthClient Factory
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * Factory for creating OauthClient model instances for testing and seeding.
 *
=======
 * 
 * Factory for creating OauthClient model instances for testing and seeding.
 * 
>>>>>>> 8055579 (.)
=======
 * 
 * Factory for creating OauthClient model instances for testing and seeding.
 * 
>>>>>>> 8d82f8c (.)
 * @extends Factory<OauthClient>
 */
class OauthClientFactory extends Factory
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
     * @var class-string<OauthClient>
     */
    protected $model = OauthClient::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->uuid(),
            'user_id' => $this->faker->optional()->randomElement([User::factory(), null]),
<<<<<<< HEAD
<<<<<<< HEAD
            'name' => $this->faker->company().' App',
=======
            'name' => $this->faker->company() . ' App',
>>>>>>> 8055579 (.)
=======
            'name' => $this->faker->company() . ' App',
>>>>>>> 8d82f8c (.)
            'secret' => $this->faker->sha256(),
            'provider' => $this->faker->optional()->randomElement(['users', 'admins']),
            'redirect' => $this->faker->url(),
            'personal_access_client' => $this->faker->boolean(20), // 20% personal access clients
            'password_client' => $this->faker->boolean(30), // 30% password clients
            'revoked' => $this->faker->boolean(5), // 5% revoked
            'grant_types' => $this->faker->optional()->randomElements([
                'authorization_code',
                'client_credentials',
                'password',
<<<<<<< HEAD
<<<<<<< HEAD
                'refresh_token',
            ], $this->faker->numberBetween(1, 3)),
            'scopes' => $this->faker->optional()->randomElements([
                'read', 'write', 'admin', 'user',
=======
                'refresh_token'
            ], $this->faker->numberBetween(1, 3)),
            'scopes' => $this->faker->optional()->randomElements([
                'read', 'write', 'admin', 'user'
>>>>>>> 8055579 (.)
=======
                'refresh_token'
            ], $this->faker->numberBetween(1, 3)),
            'scopes' => $this->faker->optional()->randomElements([
                'read', 'write', 'admin', 'user'
>>>>>>> 8d82f8c (.)
            ], $this->faker->numberBetween(1, 3)),
        ];
    }

    /**
     * Create a personal access client.
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
    public function personalAccess(): static
    {
        return $this->state(fn (array $attributes): array => [
            'personal_access_client' => true,
            'password_client' => false,
            'name' => 'Personal Access Client',
        ]);
    }

    /**
     * Create a password client.
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
    public function password(): static
    {
        return $this->state(fn (array $attributes): array => [
            'password_client' => true,
            'personal_access_client' => false,
            'name' => 'Password Grant Client',
        ]);
    }

    /**
     * Create a revoked client.
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
    public function revoked(): static
    {
        return $this->state(fn (array $attributes): array => [
            'revoked' => true,
        ]);
    }

    /**
     * Create an active client.
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
    public function active(): static
    {
        return $this->state(fn (array $attributes): array => [
            'revoked' => false,
        ]);
    }

    /**
     * Create client for a specific user.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @param User $user
     * @return static
>>>>>>> 8055579 (.)
=======
     *
     * @param User $user
     * @return static
>>>>>>> 8d82f8c (.)
     */
    public function forUser(User $user): static
    {
        return $this->state(fn (array $attributes): array => [
            'user_id' => $user->id,
        ]);
    }

    /**
     * Create client with specific redirect URI.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @param string $redirectUri
     * @return static
>>>>>>> 8055579 (.)
=======
     *
     * @param string $redirectUri
     * @return static
>>>>>>> 8d82f8c (.)
     */
    public function withRedirectUri(string $redirectUri): static
    {
        return $this->state(fn (array $attributes): array => [
            'redirect' => $redirectUri,
        ]);
    }

    /**
     * Create client with specific scopes.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string>  $scopes
=======
     * @param array<string> $scopes
     * @return static
>>>>>>> 8055579 (.)
=======
     * @param array<string> $scopes
     * @return static
>>>>>>> 8d82f8c (.)
     */
    public function withScopes(array $scopes): static
    {
        return $this->state(fn (array $attributes): array => [
            'scopes' => $scopes,
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
