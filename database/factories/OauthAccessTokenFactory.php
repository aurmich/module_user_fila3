<?php

declare(strict_types=1);

namespace Modules\User\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\User\Models\OauthAccessToken;
use Modules\User\Models\OauthClient;
use Modules\User\Models\User;

/**
 * OauthAccessToken Factory
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * Factory for creating OauthAccessToken model instances for testing and seeding.
 *
=======
 * 
 * Factory for creating OauthAccessToken model instances for testing and seeding.
 * 
>>>>>>> 8055579 (.)
=======
 * 
 * Factory for creating OauthAccessToken model instances for testing and seeding.
 * 
>>>>>>> 8d82f8c (.)
 * @extends Factory<OauthAccessToken>
 */
class OauthAccessTokenFactory extends Factory
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
     * @var class-string<OauthAccessToken>
     */
    protected $model = OauthAccessToken::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->uuid(),
            'user_id' => User::factory(),
            'client_id' => OauthClient::factory(),
            'name' => $this->faker->optional()->words(2, true),
            'scopes' => $this->faker->optional()->randomElements([
<<<<<<< HEAD
<<<<<<< HEAD
                'read', 'write', 'admin', 'user',
=======
                'read', 'write', 'admin', 'user'
>>>>>>> 8055579 (.)
=======
                'read', 'write', 'admin', 'user'
>>>>>>> 8d82f8c (.)
            ], $this->faker->numberBetween(1, 3)),
            'revoked' => $this->faker->boolean(10), // 10% revoked
            'expires_at' => $this->faker->dateTimeBetween('now', '+1 year'),
        ];
    }

    /**
     * Create a revoked token.
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
     * Create an active token.
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
            'expires_at' => $this->faker->dateTimeBetween('+1 day', '+1 year'),
        ]);
    }

    /**
     * Create token for a specific user.
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
     * Create token for a specific client.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @param OauthClient $client
     * @return static
>>>>>>> 8055579 (.)
=======
     *
     * @param OauthClient $client
     * @return static
>>>>>>> 8d82f8c (.)
     */
    public function forClient(OauthClient $client): static
    {
        return $this->state(fn (array $attributes): array => [
            'client_id' => $client->id,
        ]);
    }

    /**
     * Create token with specific scopes.
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
