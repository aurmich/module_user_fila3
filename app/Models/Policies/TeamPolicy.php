<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

use Modules\User\Models\Team;
use Modules\Xot\Contracts\ProfileContract;

class TeamPolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(ProfileContract $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(ProfileContract $user, Team $team): bool
    {
        return $user->belongsToTeam($team);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(ProfileContract $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(ProfileContract $user, Team $team): bool
    {
        return $user->ownsTeam($team);
    }

    /**
     * Determine whether the user can add team members.
     */
    public function addTeamMember(ProfileContract $user, Team $team): bool
    {
        return $user->ownsTeam($team);
    }

    /**
     * Determine whether the user can update team member permissions.
     */
    public function updateTeamMember(ProfileContract $user, Team $team): bool
    {
        return $user->ownsTeam($team);
    }

    /**
     * Determine whether the user can remove team members.
     */
    public function removeTeamMember(ProfileContract $user, Team $team): bool
    {
        return $user->ownsTeam($team);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(ProfileContract $user, Team $team): bool
    {
        return $user->ownsTeam($team);
    }
}
