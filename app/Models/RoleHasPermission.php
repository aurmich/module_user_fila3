<?php

declare(strict_types=1);

namespace Modules\User\Models;

use Illuminate\Support\Carbon;

/**
 * Modules\User\Models\RoleHasPermission.
 *
 * @property int $id
 * @property int $permission_id
 * @property int $role_id
 *
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHasPermission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHasPermission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHasPermission query()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHasPermission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHasPermission wherePermissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHasPermission whereRoleId($value)
 *
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 *
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHasPermission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHasPermission whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHasPermission whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHasPermission whereUpdatedBy($value)
 *
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 *
 * @method static RoleHasPermission|null first()
 * @method static \Illuminate\Database\Eloquent\Collection<int, RoleHasPermission> get()
 * @method static RoleHasPermission create(array $attributes = [])
 * @method static RoleHasPermission firstOrCreate(array $attributes = [], array $values = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleHasPermission where(string|\Closure $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleHasPermission whereNotNull(string|\Illuminate\Contracts\Database\Query\Expression $columns)
 * @method static int count(string $columns = '*')
 *
 * @mixin IdeHelperRoleHasPermission
 * @mixin \Eloquent
 */
class RoleHasPermission extends BasePivot
{
    /**
     * @var list<string>
     *
     * @psalm-var list{'permission_id', 'role_id'}
     */
    protected $fillable = ['permission_id', 'role_id'];
}
