<?php

declare(strict_types=1);

namespace Modules\User\Database\Factories;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\User\Models\Team;
use Modules\User\Models\User;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
=======
use Modules\User\Models\Team;
use Modules\User\Models\User;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Illuminate\Database\Eloquent\Factories\Factory;
>>>>>>> 079c9da7 (.)

/**
 * Factory per il modello Team del modulo User.
 *
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\User\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Il nome del modello corrispondente alla factory.
     *
     * @var class-string<\Modules\User\Models\Team>
     */
    protected $model = Team::class;

    /**
     * Definisce lo stato di default del modello.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $teamTypes = [
            'Amministrazione',
            'Sviluppo',
            'Marketing',
            'Vendite',
            'Supporto Clienti',
            'Risorse Umane',
            'Contabilità',
            'Produzione',
            'Qualità',
<<<<<<< HEAD
            'Logistica',
=======
            'Logistica'
>>>>>>> 079c9da7 (.)
        ];

        return [
            'name' => app(SafeStringCastAction::class)->execute($this->faker->randomElement($teamTypes)) . ' Team',
            'user_id' => User::factory(),
            'personal_team' => false,
        ];
    }

    /**
     * Indica che il team è un team personale.
     *
     * @return static
     */
    public function personal(): static
    {
<<<<<<< HEAD
        return $this->state(fn(array $_attributes) => [
=======
        return $this->state(fn (array $attributes) => [
>>>>>>> 079c9da7 (.)
            'personal_team' => true,
            'name' => $this->faker->firstName() . "'s Team",
        ]);
    }

    /**
     * Crea un team con un owner specifico.
     *
     * @param int $userId
     * @return static
     */
    public function ownedBy(int $userId): static
    {
<<<<<<< HEAD
        return $this->state(fn(array $_attributes) => [
=======
        return $this->state(fn (array $attributes) => [
>>>>>>> 079c9da7 (.)
            'user_id' => $userId,
        ]);
    }

    /**
     * Crea un team con un nome specifico.
     *
     * @param string $name
     * @return static
     */
    public function withName(string $name): static
    {
<<<<<<< HEAD
        return $this->state(fn(array $_attributes) => [
            'name' => $name . ' Team',
        ]);
    }
}
=======
        return $this->state(fn (array $attributes) => [
            'name' => $name . ' Team',
        ]);
    }
}
>>>>>>> 079c9da7 (.)
