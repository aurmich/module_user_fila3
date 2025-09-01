<?php

declare(strict_types=1);

namespace Modules\User\Models;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Builder;
>>>>>>> 8055579 (.)
=======
use Illuminate\Database\Eloquent\Builder;
>>>>>>> 8d82f8c (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Team Permission Model
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> 8055579 (.)
=======
 * 
>>>>>>> 8d82f8c (.)
 * Represents a permission assigned to a user within a team context.
 *
 * @property string $id
 * @property string $team_id
 * @property string $user_id
 * @property string $permission
 * @property \DateTime|null $created_at
 * @property \DateTime|null $updated_at
 * @property Team $team
 * @property User $user
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamPermission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamPermission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamPermission query()
 *
=======
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamPermission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamPermission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamPermission query()
>>>>>>> 8055579 (.)
=======
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamPermission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamPermission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamPermission query()
>>>>>>> 8d82f8c (.)
 * @mixin IdeHelperTeamPermission
 * @mixin \Eloquent
 */
class TeamPermission extends Model
{
<<<<<<< HEAD
<<<<<<< HEAD
    /**
=======
    /** 
>>>>>>> 8d82f8c (.)
     * The database connection that should be used by the model.
     *
     * @var string 
     */
    protected $connection = 'user';

    /** 
     * The attributes that are mass assignable.
     *
<<<<<<< HEAD
     * @var list<string>
=======
    /** 
     * The database connection that should be used by the model.
     *
     * @var string 
     */
    protected $connection = 'user';

    /** 
     * The attributes that are mass assignable.
     *
     * @var list<string> 
>>>>>>> 8055579 (.)
=======
     * @var list<string> 
>>>>>>> 8d82f8c (.)
     */
    protected $fillable = [
        'team_id',
        'user_id',
        'permission',
    ];

    /**
     * Get the team that owns the permission.
     */
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * Get the user that owns the permission.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
