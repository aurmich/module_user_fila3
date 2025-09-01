<?php

declare(strict_types=1);

namespace Modules\User\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\User\Models\Membership;
use Modules\User\Models\Team;
use Modules\User\Models\User;

/**
 * Membership Factory
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * Factory for creating Membership model instances for testing and seeding.
 *
=======
 * 
 * Factory for creating Membership model instances for testing and seeding.
 * 
>>>>>>> 8055579 (.)
=======
 * 
 * Factory for creating Membership model instances for testing and seeding.
 * 
>>>>>>> 8d82f8c (.)
 * @extends Factory<Membership>
 */
class MembershipFactory extends Factory
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
     * @var class-string<Membership>
     */
    protected $model = Membership::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'team_id' => Team::factory(),
            'user_id' => User::factory(),
            'role' => $this->faker->randomElement(['admin', 'editor', 'member', 'viewer']),
            'customer_id' => $this->faker->optional(0.3)->uuid(),
        ];
    }

    /**
     * Create membership for a specific team.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @param Team $team
     * @return static
>>>>>>> 8055579 (.)
=======
     *
     * @param Team $team
     * @return static
>>>>>>> 8d82f8c (.)
     */
    public function forTeam(Team $team): static
    {
        return $this->state(fn (array $attributes): array => [
            'team_id' => $team->id,
        ]);
    }

    /**
     * Create membership for a specific user.
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
     * Set the role to admin.
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
        return $this->state(fn (array $attributes): array => [
            'role' => 'admin',
        ]);
    }

    /**
     * Set the role to editor.
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
    public function editor(): static
    {
        return $this->state(fn (array $attributes): array => [
            'role' => 'editor',
        ]);
    }

    /**
     * Set the role to member.
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
    public function member(): static
    {
        return $this->state(fn (array $attributes): array => [
            'role' => 'member',
        ]);
    }

    /**
     * Set the role to viewer.
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
    public function viewer(): static
    {
        return $this->state(fn (array $attributes): array => [
            'role' => 'viewer',
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
