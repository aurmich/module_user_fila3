<?php

declare(strict_types=1);

namespace Modules\User\Console\Commands;

use Illuminate\Console\Command;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;
use Symfony\Component\Console\Input\InputOption;

use function Laravel\Prompts\select;
use function Laravel\Prompts\text;

<<<<<<< HEAD
/**
 * Comando per impostare il team corrente per un utente.
 */
=======
>>>>>>> 67cd443 (.)
class SetCurrentTeamCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'user:set-current-team';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Assign current team to user';

    /**
<<<<<<< HEAD
=======
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
>>>>>>> 67cd443 (.)
     * Execute the console command.
     */
    public function handle(): void
    {
        $email = text('email ?');
<<<<<<< HEAD
        if (empty($email)) {
            $this->error('Email non valida!');
            return;
        }

        $xot = XotData::make();
        $user = $xot->getUserByEmail($email);

        if (! $user instanceof \Illuminate\Database\Eloquent\Model) {
            $this->error('Utente non trovato o non valido!');
            return;
        }

        $teamClass = $xot->getTeamClass();
        if (!class_exists($teamClass)) {
            $this->error('Classe team non trovata!');
            return;
        }

        /** @var array<int|string, string> */
        $opts = $teamClass::pluck('name', 'id')->toArray();

        if (empty($opts)) {
            $this->error('Nessun team disponibile!');
            return;
        }

        $team_id = select(
            label: 'Quale team?',
=======
        $user_class = XotData::make()->getUserClass();
        /** @var UserContract */
        $user = XotData::make()->getUserByEmail($email);
        $xot = XotData::make();
        $teamClass = $xot->getTeamClass();
        /** @var array<int|string, string>|\Illuminate\Support\Collection<int|string, string> */
        $opts = $teamClass::pluck('name', 'id')
            ->toArray();

        $team_id = select(
            label: 'What team?',
>>>>>>> 67cd443 (.)
            options: $opts,
            required: true,
            scroll: 10,
        );

<<<<<<< HEAD
        if (!is_numeric($team_id)) {
            $this->error('ID team non valido!');
            return;
        }

        try {
            $user->current_team_id = (int) $team_id;
            $user->save();
            $this->info('OK');
        } catch (\Exception $e) {
            $this->error('Errore durante il salvataggio: ' . $e->getMessage());
        }
=======
        $user->current_team_id = (int) $team_id;
        $user->save();

        $this->info('OK');
>>>>>>> 67cd443 (.)
    }

    /**
     * Get the console command options.
     */
    protected function getOptions(): array
    {
        return [
            ['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
        ];
    }
}
