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
>>>>>>> 8055579 (.)

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
        ];

        return [
            'name' => app(SafeStringCastAction::class)->execute($this->faker->randomElement($teamTypes)).' Team',
=======
            'Logistica'
        ];

        return [
            'name' => app(SafeStringCastAction::class)->execute($this->faker->randomElement($teamTypes)) . ' Team',
>>>>>>> 8055579 (.)
            'user_id' => User::factory(),
            'personal_team' => false,
        ];
    }

    /**
     * Indica che il team è un team personale.
<<<<<<< HEAD
=======
     *
     * @return static
>>>>>>> 8055579 (.)
     */
    public function personal(): static
    {
        return $this->state(fn (array $attributes) => [
            'personal_team' => true,
<<<<<<< HEAD
            'name' => $this->faker->firstName()."'s Team",
=======
            'name' => $this->faker->firstName() . "'s Team",
>>>>>>> 8055579 (.)
        ]);
    }

    /**
     * Crea un team con un owner specifico.
<<<<<<< HEAD
=======
     *
     * @param int $userId
     * @return static
>>>>>>> 8055579 (.)
     */
    public function ownedBy(int $userId): static
    {
        return $this->state(fn (array $attributes) => [
            'user_id' => $userId,
        ]);
    }

    /**
     * Crea un team con un nome specifico.
<<<<<<< HEAD
=======
     *
     * @param string $name
     * @return static
>>>>>>> 8055579 (.)
     */
    public function withName(string $name): static
    {
        return $this->state(fn (array $attributes) => [
<<<<<<< HEAD
            'name' => $name.' Team',
        ]);
    }
}
=======
            'name' => $name . ' Team',
        ]);
    }
}
>>>>>>> 8055579 (.)
