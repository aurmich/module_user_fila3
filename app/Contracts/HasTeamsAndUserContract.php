<?php

declare(strict_types=1);

namespace Modules\User\Contracts;

use Modules\User\Models\Team;
<<<<<<< HEAD
use Modules\User\Contracts\TeamContract;
use Modules\User\Models\Role;
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\UserContract;
use Spatie\Permission\Models\Role;
>>>>>>> aurmich/dev

/**
 * Interfaccia che combina le funzionalità di HasTeamsContract e UserContract
 */
interface HasTeamsAndUserContract extends HasTeamsContract, UserContract
{
    /**
     * Ottiene il ruolo dell'utente nel team
     */
<<<<<<< HEAD
    public function teamRole(TeamContract $team): ?Role;
=======
    public function teamRole(Team $team): ?string;
>>>>>>> aurmich/dev

    /**
     * Verifica se l'utente può rimuovere un membro dal team
     */
    public function canRemoveTeamMember(Team $team, HasTeamsContract $user): bool;

    /**
     * Verifica se l'utente può aggiornare un membro del team
     */
    public function canUpdateTeamMember(Team $team, HasTeamsContract $user): bool;
}
