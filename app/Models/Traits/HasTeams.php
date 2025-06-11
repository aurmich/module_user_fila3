<?php

declare(strict_types=1);

namespace Modules\User\Models\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;
use Modules\User\Contracts\TeamContract;
use Modules\User\Models\TeamUser;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Models\Traits\RelationX;
use Webmozart\Assert\Assert;

/**
 * Trait HasTeams - Jetstream Philosophy + Laraxot Evolution.
 *
 * Inspired by Laravel Jetstream but evolved with Laraxot intelligence:
 * - belongsToManyX for auto-discovery
 * - Strict typing for PHPStan Level 9+
 * - Runtime validation with Assert
 * - Cross-database support
 * - Explicit pivot models
 *
 * @property-read TeamContract|null $currentTeam
 * @property int|null $current_team_id
 * @property-read Collection<int, TeamContract> $teams
 * @property-read Collection<int, TeamContract> $ownedTeams
 */
trait HasTeams
{
    use RelationX;

    // ==================== JETSTREAM CORE METHODS ====================

    /**
     * Determine if the given team is the current team.
     *
     * @param TeamContract $team
     * @return bool
     */
    public function isCurrentTeam(TeamContract $team): bool
    {
        return $team->id === $this->currentTeam?->id;
    }

    /**
     * Get the current team of the user's context.
     *
     * @return BelongsTo<TeamContract, static>
     */
    public function currentTeam(): BelongsTo
    {
        if (is_null($this->current_team_id) && $this->id) {
            $this->switchTeam($this->personalTeam());
        }

        $teamClass = XotData::make()->getTeamClass();
        return $this->belongsTo($teamClass, 'current_team_id');
    }

    /**
     * Switch the user's context to the given team.
     *
     * @param TeamContract|null $team
     * @return bool
     */
    public function switchTeam(?TeamContract $team): bool
    {
        if ($team !== null && !$this->belongsToTeam($team)) {
            return false;
        }

        $this->forceFill([
            'current_team_id' => $team?->id,
        ])->save();

        if ($team) {
            $this->setRelation('currentTeam', $team);
        }

        return true;
    }

    /**
     * Get all of the teams the user owns or belongs to.
     *
     * @return Collection<int, TeamContract>
     */
    public function allTeams(): Collection
    {
        return $this->ownedTeams->merge($this->teams)->sortBy('name');
    }

    /**
     * Get all of the teams the user owns.
     *
     * @return HasMany<TeamContract>
     */
    public function ownedTeams(): HasMany
    {
        $teamClass = XotData::make()->getTeamClass();
        return $this->hasMany($teamClass);
    }

    /**
     * Get all of the teams the user belongs to (LARAXOT EVOLUTION).
     *
     * Uses belongsToManyX for intelligent auto-discovery:
     * - Automatically finds TeamUser as pivot model
     * - Configures team_user as table
     * - Includes all $fillable fields from pivot
     * - Handles cross-database scenarios
     * - Adds timestamps automatically
     *
     * @return BelongsToMany<TeamContract, static>
     */
    public function teams(): BelongsToMany
    {
        $teamClass = XotData::make()->getTeamClass();
        return $this->belongsToManyX($teamClass); // LARAXOT MAGIC!
    }

    /**
     * Determine if the user belongs to the given team.
     *
     * @param TeamContract|null $team
     * @return bool
     */
    public function belongsToTeam(\Modules\User\Contracts\TeamContract $team): bool
    {
<<<<<<< HEAD
        $found = $this->teams()->where('teams.id', $team->id)->first();
        if ($found === null) {
            return false;
        }
        \Webmozart\Assert\Assert::isInstanceOf($found, \Modules\User\Contracts\TeamContract::class, 'Team must implement TeamContract.');
        return true;
=======
        if ($team === null) {
            return false;
        }

        return $this->teams->contains($team) || $this->ownsTeam($team);
>>>>>>> 5ed631f (.)
    }

    /**
     * Determine if the user owns the given team.
     *
     * @param TeamContract $team
     * @return bool
     */
    public function ownsTeam(TeamContract $team): bool
    {
        Assert::notNull($team, 'Team cannot be null');
        
        return $this->id && $team->user_id && $this->id === $team->user_id;
    }

    /**
     * Get the user's personal team.
     *
     * @return TeamContract|null
     */
    public function personalTeam(): ?TeamContract
    {
        return $this->ownedTeams->where('personal_team', true)->first();
    }

    // ==================== LARAXOT EXTENSIONS ====================

    /**
     * Check if the user belongs to any teams (LARAXOT ADDITION).
     *
     * @return bool
     */
    public function belongsToTeams(): bool
    {
        return $this->teams()->exists() || $this->ownedTeams()->exists();
    }

    /**
     * Get the user's role on the given team (ENHANCED JETSTREAM).
     * 
     * Respects HasTeamsContract - returns Role model instead of string.
     * Use teamRoleName() for string representation.
     *
     * @param TeamContract $team
     * @return \Modules\User\Models\Role|null
     */
<<<<<<< HEAD
    public function switchTeam(?\Modules\User\Contracts\TeamContract $team): bool
    {
        if ($team === null) {
            return false;
        }

        if (! $this->belongsToTeam($team)) {
            return false;
=======
    public function teamRole(TeamContract $team): ?\Modules\User\Models\Role
    {
        Assert::notNull($team, 'Team cannot be null');

        if ($this->ownsTeam($team)) {
            // Owner role - create or find the 'owner' role
            return \Modules\User\Models\Role::firstOrCreate([
                'name' => 'owner',
                'guard_name' => 'web',
                'team_id' => $team->id,
            ]);
>>>>>>> 5ed631f (.)
        }

        $membership = $this->teams()
            ->where('teams.id', $team->id)
            ->first()
            ?->pivot;

        if (!$membership || !$membership->role) {
            return null;
        }

        // TeamUser pivot stores role as string, so we need to find/create the Role model
        return \Modules\User\Models\Role::firstOrCreate([
            'name' => $membership->role,
            'guard_name' => 'web',
            'team_id' => $team->id,
        ]);
    }

    /**
     * Get the user's role name on the given team (string representation).
     *
     * @param TeamContract $team
     * @return string|null
     */
    public function teamRoleName(TeamContract $team): ?string
    {
        return $this->teamRole($team)?->name;
    }

    /**
     * Determine if the user has the given role on the given team (ENHANCED JETSTREAM).
     *
     * @param TeamContract $team
     * @param string $role
     * @return bool
     */
    public function hasTeamRole(TeamContract $team, string $role): bool
    {
        Assert::notNull($team, 'Team cannot be null');
        Assert::stringNotEmpty($role, 'Role cannot be empty');

        if ($this->ownsTeam($team)) {
            return true; // Owner has all roles
        }

        return $this->belongsToTeam($team) && $this->teamRoleName($team) === $role;
    }

    /**
     * Get the user's permissions for the given team.
     *
     * @param TeamContract $team
     * @return array<string>
     */
    public function teamPermissions(TeamContract $team): array
    {
        if ($this->ownsTeam($team)) {
            return ['*'];
        }

        if (!$this->belongsToTeam($team)) {
            return [];
        }

        $role = $this->teamRole($team);
        // Implementare logica permessi basata su ruolo
        return $role ? [$role->name] : [];
    }

    /**
     * Determine if the user has the given permission on the given team.
     *
     * @param TeamContract $team
     * @param string $permission
     * @return bool
     */
    public function hasTeamPermission(TeamContract $team, string $permission): bool
    {
        if ($this->ownsTeam($team)) {
            return true;
        }

        if (!$this->belongsToTeam($team)) {
            return false;
        }

        $permissions = $this->teamPermissions($team);

        return in_array($permission, $permissions) || in_array('*', $permissions);
    }

    // ==================== UTILITY METHODS ====================

    /**
     * Check if the user has teams (alias for belongsToTeams).
     *
     * @return bool
     */
    public function hasTeams(): bool
    {
        return $this->belongsToTeams();
    }

    /**
     * Determine if the user owns or belongs to the given team.
     *
     * @param TeamContract $team
     * @return bool
     */
    public function isOwnerOrMember(TeamContract $team): bool
    {
        return $this->ownsTeam($team) || $this->belongsToTeam($team);
    }
}
