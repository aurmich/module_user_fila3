<?php

declare(strict_types=1);

namespace Modules\User\Models;

use Filament\Models\Contracts\HasName;
use Filament\Models\Contracts\HasTenants;
use Filament\Panel;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\BelongsTo;
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\BelongsTo;
=======
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
<<<<<<< HEAD
use Illuminate\Notifications\DatabaseNotification;
=======
<<<<<<< HEAD
use Illuminate\Notifications\DatabaseNotification;
=======
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Passport\HasApiTokens;
use Modules\User\Database\Factories\UserFactory;
use Modules\User\Models\Traits\HasTeams;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Models\Traits\RelationX;
use Spatie\Permission\Traits\HasRoles;
<<<<<<< HEAD
use Parental\HasChildren;
=======
<<<<<<< HEAD
=======
use Modules\User\Models\AuthenticationLog;
use Modules\User\Models\Notification;
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev

/**
 * Modules\User\Models\User.
 *
<<<<<<< HEAD
 * @template TModel of \Illuminate\Database\Eloquent\Model
 * @template TRelatedModel of \Illuminate\Database\Eloquent\Model
 *
=======
<<<<<<< HEAD
 * @template TModel of \Illuminate\Database\Eloquent\Model
 * @template TRelatedModel of \Illuminate\Database\Eloquent\Model
 *
=======
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
 * @property Collection<int, OauthClient> $clients
 * @property int|null $clients_count
 * @property Team|null $currentTeam
 * @property Collection<int, Device> $devices
 * @property int|null $devices_count
 * @property string|null $full_name
<<<<<<< HEAD
 * @property DatabaseNotificationCollection<int, DatabaseNotification> $notifications
=======
<<<<<<< HEAD
 * @property DatabaseNotificationCollection<int, DatabaseNotification> $notifications
=======
 * @property DatabaseNotificationCollection<int, Notification> $notifications
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
 * @property int|null $notifications_count
 * @property Collection<int, Team> $ownedTeams
 * @property int|null $owned_teams_count
 * @property Collection<int, Permission> $permissions
 * @property int|null $permissions_count
 * @property \Modules\Xot\Contracts\ProfileContract|null $profile
 * @property Collection<int, Role> $roles
 * @property int|null $roles_count
 * @property Collection<int, Team> $teams
 * @property int|null $teams_count
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
 * @property Collection<int, Tenant> $tenants
 * @property int|null $tenants_count
 * @property Collection<int, OauthAccessToken> $tokens
 * @property int|null $tokens_count
 * @property string $surname
 * @property string|null $facebook_id
 * @property Collection<int, SocialiteUser> $socialiteUsers
 * @property int|null $socialite_users_count
 * @property string|null $name
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $email
 * @property string|null $password
 * @property string|null $lang
 * @property string|null $current_team_id
 * @property bool|null $is_active
 * @property bool|null $is_otp
 * @property \DateTime|null $password_expires_at
 * @property \DateTime|null $email_verified_at
 * @property string|null $remember_token
 * @property \DateTime|null $created_at
 * @property \DateTime|null $updated_at
 * @property \DateTime|null $deleted_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property string|null $profile_photo_path
 * @property \Illuminate\Database\Eloquent\Relations\Pivot|null $pivot
<<<<<<< HEAD
=======
=======
 * @property Collection<int, OauthAccessToken> $tokens
 * @property int|null $tokens_count
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
 *
 * @method static \Modules\User\Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedBy($value)
<<<<<<< HEAD
=======
=======
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 *
 * @property string $id
 * @property string $name
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property string|null $lang
 * @property bool $is_active
 *
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutRole($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFacebookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsOtp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePasswordExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSurname($value)
 *
<<<<<<< HEAD
=======
=======
 *
 * @mixin Eloquent
 *
 * @property Collection<int, Tenant> $tenants
 * @property int|null $tenants_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutRole($roles, $guard = null)
 *
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property string|null $deleted_by
 *
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedBy($value)
 *
 * @property string $surname
 *
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSurname($value)
 *
 * @property string|null $facebook_id
 *
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFacebookId($value)
 * @method bool canAccessSocialite()
 *
 * @property TenantUser $pivot
 * @property Membership $membership
 * @property Collection<int, AuthenticationLog> $authentications
 * @property int|null $authentications_count
 * @property AuthenticationLog|null $latestAuthentication
 *
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
 * @mixin \Eloquent
 */
abstract class BaseUser extends Authenticatable implements HasName, HasTenants, UserContract
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    use HasApiTokens;
    use HasFactory;
    use HasRoles;
    use HasTeams;
    use HasUuids;
<<<<<<< HEAD
    use Notifiable;
    use RelationX;
    use HasChildren;
=======
=======
    /* , HasAvatar, UserJetContract, ExportsPersonalData */
    /* , HasTeamsContract */
    use HasApiTokens;
    use HasFactory;

    // use TwoFactorAuthenticatable; //ArtMin96
    // use CanExportPersonalData; //ArtMin96
    use HasRoles;

    // use HasProfilePhoto; //ArtMin96
    // use HasTeams; //ArtMin96
    use HasTeams;
    use HasUuids;

    // use Traits\HasProfilePhoto;
>>>>>>> 67cd443 (.)
    use Notifiable;
    use RelationX;
>>>>>>> aurmich/dev
    use Traits\HasAuthenticationLogTrait;
    use Traits\HasTenants;

    public $incrementing = false;

    /** @var string */
    protected $connection = 'user';

    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
    protected $keyType = 'string';

    /** @var list<string> */
    protected $fillable = [
        'id',
        'name',
        'first_name',
        'last_name',
        'email',
        'password',
        'lang',
        'current_team_id',
        'is_active',
        'is_otp', // is One Time Password
        'password_expires_at',
<<<<<<< HEAD
        'type', // parental  
=======
>>>>>>> aurmich/dev
    ];

    /** @var list<string> */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /** @var list<string> */
    protected $with = [
        'roles',
    ];

    /** @var list<string> */
    protected $appends = [
        // 'profile_photo_url',
    ];

<<<<<<< HEAD
    /** @var \Illuminate\Database\Eloquent\Relations\Pivot|null */
    public $pivot;

    protected $childColumn = 'type';
    protected $childTypes = [
        
    ];

=======
<<<<<<< HEAD
    /** @var \Illuminate\Database\Eloquent\Relations\Pivot|null */
    public $pivot;

=======
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    public function canAccessFilament(?Panel $panel = null): bool
    {
        // return $this->role_id === Role::ROLE_ADMINISTRATOR;
        return true;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    /**
     * Get the user's name for Filament.
     *
     * @return string
     */
    public function getFilamentName(): string
    {
        /** @var string|null */
        $name = $this->getAttribute('name');

        /** @var string|null */
        $firstName = $this->getAttribute('first_name');

        /** @var string|null */
        $lastName = $this->getAttribute('last_name');

        return trim(sprintf(
            '%s %s %s',
            $name ?? '',
            $firstName ?? '',
            $lastName ?? '',
        ));
<<<<<<< HEAD
=======
=======
    public function getFilamentName(): string
    {
        return sprintf(
            '%s %s %s',
            $this->name,
            $this->first_name,
            $this->last_name,
        );
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    }

    public function profile(): HasOne
    {
        /** @var class-string<Model> */
        $profileClass = XotData::make()->getProfileClass();

        return $this->hasOne($profileClass);
    }

    public function canAccessPanel(Panel $panel): bool
    {
        // $panel->default('admin');
        if ($panel->getId() !== 'admin') {
            $role = $panel->getId();
            /*
            $xot = XotData::make();
            if ($xot->super_admin === $this->email) {
                $role = Role::firstOrCreate(['name' => $role]);
                $this->assignRole($role);
            }
            */

            return $this->hasRole($role);
        }

        return true; // str_ends_with($this->email, '@yourdomain.com') && $this->hasVerifiedEmail();
    }

    public function canAccessSocialite(): bool
    {
        return true;
    }

    public function detach(Model $model): void
    {
        // @phpstan-ignore function.alreadyNarrowedType
        if (method_exists($this, 'teams')) {
            // @phpstan-ignore function.alreadyNarrowedType
            $this->teams()->detach($model);
        }
    }

    public function attach(Model $model): void
    {
        // @phpstan-ignore function.alreadyNarrowedType
        if (method_exists($this, 'teams')) {
            // @phpstan-ignore function.alreadyNarrowedType
            $this->teams()->attach($model);
        }
    }

    public function treeLabel(): string
    {
<<<<<<< HEAD
        return strval($this->name ?? $this->email);
=======
<<<<<<< HEAD
        return strval($this->name ?? $this->email);
=======
        return $this->name ?? $this->email;
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    }

    public function treeSons(): Collection
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
        return $this->teams ?? new Collection();
    }

    /**
     * @return BelongsToMany<Device, static|$this>
     */
<<<<<<< HEAD
=======
=======
        return $this->teams ?? new Collection;
    }

    public function treeSonsCount(): int
    {
        return $this->teams()->count();
    }

    public function user(): UserContract
    {
        return $this;
    }

>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    public function devices(): BelongsToMany
    {
        return $this
            ->belongsToManyX(Device::class);
    }

    public function socialiteUsers(): HasMany
    {
        return $this
            ->hasMany(SocialiteUser::class);
    }

    public function getProviderField(string $provider, string $field): string
    {
        $socialiteUser = $this->socialiteUsers()->firstWhere(['provider' => $provider]);
        if ($socialiteUser == null) {
            throw new \Exception('SocialiteUser not found');
        }

        $res = $socialiteUser->{$field};
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
        return (string) $res;
    }

    /**
     * Get the entity's notifications.
     *
     * @return MorphMany<Notification, static|$this>
<<<<<<< HEAD
=======
=======
        if (is_string($res)) {
            return $res;
        }
        dddx($socialiteUser);
        throw new \Exception('SocialiteUser field ['.$field.'] not found');
    }

    /**
     * Get all of the user's notifications.
     *
     * @return MorphMany<Notification, static>
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
     */
    public function notifications()
    {
        // @phpstan-ignore return.type
        return $this->morphMany(Notification::class, 'notifiable');
    }

    /**
     * Get the user's latest authentication log.
     *
     * @return MorphOne<AuthenticationLog, static>
     */
    public function latestAuthentication(): MorphOne
    {
        // @phpstan-ignore return.type
        return $this->morphOne(AuthenticationLog::class, 'authenticatable')
            ->latestOfMany();
    }

    public function getFullNameAttribute(?string $value): ?string
    {
<<<<<<< HEAD
        return $value ?? $this->first_name . ' ' . $this->last_name;
=======
<<<<<<< HEAD
        return $value ?? $this->first_name . ' ' . $this->last_name;
=======
        return $value ?? $this->first_name.' '.$this->last_name;
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    }

    public function getNameAttribute(?string $value): ?string
    {
        if ($value !== null || $this->getKey() === null) {
            return $value;
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
        $name = Str::of((string) $this->email)->before('@')->toString();
        $i = 1;
        $value = $name . '-' . $i;
        while (self::firstWhere(['name' => $value]) !== null) {
            $i++;
            $value = $name . '-' . $i;
<<<<<<< HEAD
=======
=======
        $name = Str::of($this->email)->before('@')->toString();
        $i = 1;
        $value = $name.'-'.$i;
        while (self::firstWhere(['name' => $value]) !== null) {
            $i++;
            $value = $name.'-'.$i;
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
        }
        $this->update(['name' => $value]);

        return $value;
    }

    /**
     * Create a new factory instance for the model.
     *
     * @return Factory
     */
    protected static function newFactory()
    {
        return UserFactory::new();
    }

    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'email_verified_at' => 'datetime',
            // 'password' => 'hashed', //Call to undefined cast [hashed] on column [password] in model [Modules\User\Models\User].
            'is_active' => 'boolean',
            'roles.pivot.id' => 'string',
            // https://github.com/beitsafe/laravel-uuid-auditing
            // ALTER TABLE model_has_role CHANGE COLUMN `id` `id` CHAR(37) NOT NULL DEFAULT uuid();

            'is_otp' => 'boolean',
            'password_expires_at' => 'datetime',

            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',

            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }

    /**
     * Check if the user has teams.
     */
    public function hasTeams(): bool
    {
        return true;
    }

    /**
     * Check if the user belongs to any teams.
     */
    public function belongsToTeams(): bool
    {
        return true;
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev


    /**
     * Get permissions for a specific team.
     *
     * @param \Modules\User\Contracts\TeamContract $team
     * @return array<int, string>
     */
    public function teamPermissions(\Modules\User\Contracts\TeamContract $team): array
    {
        $role = $this->teamRole($team);

        if ($role === null || !$role->permissions) {
            return [];
        }

        /** @var array<int, string> */
        return $role->permissions->pluck('name')->values()->toArray();
    }

    /**
     * Get the role name for the current team.
     *
     * @return array<int, string>
     */
    /**
     * Get all role names associated with the user.
     * @return array<int, string>
     */
    public function getRoleNames(): array
    {
        /** @var array<int, string> */
        return $this->roles()->pluck('name')->filter()->values()->toArray();
    }

    public function personalTeam(): ?Team
    {
        /** @var Team|null */
        return $this->ownedTeams()->first();
    }

    public function switchTeam(\Modules\User\Contracts\TeamContract $team): bool
    {
        if (! $this->belongsToTeam($team)) {
            return false;
        }

        $this->current_team_id = (string) $team->id;
        $this->save();

        return true;
    }

    public function allTeams(): Collection
    {
        return $this->teams()->get();
    }

    public function belongsToTeam(\Modules\User\Contracts\TeamContract $team): bool
    {
        /** @var ?\Illuminate\Database\Eloquent\Model $found */
        $found = $this->teams()->get()->first(function ($t) use ($team) {
            // Accesso sicuro agli attributi
            $teamId = $team->id ?? null;
            $tId = $t->id ?? null;
            $tTeamId = $t->team_id ?? null;

            return ($tId !== null && $teamId !== null && $tId === $teamId) ||
                ($tTeamId !== null && $teamId !== null && $tTeamId === $teamId);
        });

        return $found !== null;
    }

    public function ownsTeam(\Modules\User\Contracts\TeamContract $team): bool
    {
        /** @var ?\Illuminate\Database\Eloquent\Model $found */
        $found = $this->ownedTeams()->get()->first(function ($t) use ($team) {
            // Accesso sicuro agli attributi
            $teamId = $team->id ?? null;
            $tId = $t->id ?? null;

            return $tId !== null && $teamId !== null && $tId === $teamId;
        });

        return $found !== null;
    }

    public function teamRole(\Modules\User\Contracts\TeamContract $team): ?Role
    {
        /** @var \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\Pivot|null $teamUser */
        $teamUser = $this->teams()->where('team_id', $team->id)->first();
        if ($teamUser && method_exists($teamUser, 'getPivot') && $teamUser->getPivot() !== null && isset($teamUser->pivot->role)) {
            return $teamUser->pivot->role;
        }
        return null;
    }

    public function hasTeamPermission(\Modules\User\Contracts\TeamContract $team, string $permission): bool
    {
        return $this->ownsTeam($team) || in_array($permission, $this->teamPermissions($team));
    }

    public function hasTeamRole(\Modules\User\Contracts\TeamContract $team, string $role): bool
    {
        if ($this->ownsTeam($team)) {
            return true;
        }

        $teamRole = $this->teamRole($team);
        return $teamRole !== null && isset($teamRole->name) && $teamRole->name === $role;
    }

    public function canManageTeam(Team $team): bool
    {
        return $this->ownsTeam($team);
    }

    public function canDeleteTeam(Team $team): bool
    {
        return $this->ownsTeam($team);
    }

    public function canLeaveTeam(Team $team): bool
    {
        return $this->belongsToTeam($team) && ! $this->ownsTeam($team);
    }

    public function canRemoveTeamMember(Team $team, User $user): bool
    {
        return $this->ownsTeam($team) || $this->hasTeamPermission($team, 'remove team member');
    }

    public function canAddTeamMember(Team $team): bool
    {
        return $this->ownsTeam($team) || $this->hasTeamPermission($team, 'add team member');
    }

    public function canUpdateTeamMember(Team $team, User $user): bool
    {
        return $this->ownsTeam($team) || $this->hasTeamPermission($team, 'update team member');
    }

    public function canUpdateTeam(Team $team): bool
    {
        return $this->ownsTeam($team) || $this->hasTeamPermission($team, 'update team');
    }

    public function canViewTeam(Team $team): bool
    {
        return $this->belongsToTeam($team) || $this->hasTeamPermission($team, 'view team');
    }

    public function canCreateTeam(): bool
    {
        return $this->hasPermissionTo('create team');
    }

    public function ownedTeams(): HasMany
    {
        return $this->hasMany(Team::class, 'owner_id');
    }

    public function currentTeam(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'current_team_id');
    }

    public function authentications(): MorphMany
    {
        return $this->morphMany(\Modules\User\Models\Authentication::class, 'authenticatable');
    }

    /**
     * Check if the user has a specific role.
     *
     * @param array|\Illuminate\Support\Collection|int|\Spatie\Permission\Contracts\Role|string $roles
     * @param string|null $guard
     * @return bool
     */
    public function hasRole($roles, ?string $guard = null): bool
    {
        // Se è una stringa semplice, utilizziamo il metodo interno tramite relazione roles
        if (is_string($roles)) {
            return $this->roles()->where('name', $roles)->exists();
        }

        // Per gli altri tipi, implementiamo una logica di base
        if (is_array($roles) || $roles instanceof \Illuminate\Support\Collection) {
            foreach ($roles as $role) {
                if ($this->hasRole($role, $guard)) {
                    return true;
                }
            }
            return false;
        }

        if ($roles instanceof \Spatie\Permission\Contracts\Role) {
            return $this->roles()->where('id', $roles->id)->exists();
        }

        if (is_int($roles)) {
            return $this->roles()->where('id', $roles)->exists();
        }

        return false;
    }

    /**
     * Get all permission names associated with the user's roles.
     *
     * @return array<int, string>
     */
    public function getPermissionNames(): array
    {
        $roles = $this->roles()->with('permissions')->get();
        if ($roles->isEmpty()) {
            return [];
        }

        $permissions = collect();
        foreach ($roles as $role) {
            if (isset($role->permissions) && $role->permissions !== null) {
                $permissions = $permissions->merge($role->permissions);
            }
        }

        /** @var array<int, string> */
        return $permissions->pluck('name')->values()->toArray();
    }
<<<<<<< HEAD
=======
=======
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
}
