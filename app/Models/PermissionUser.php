<?php

declare(strict_types=1);

namespace Modules\User\Models;

/**
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 *
 * @method static \Modules\User\Database\Factories\PermissionUserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PermissionUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PermissionUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PermissionUser query()
 * @method static PermissionUser|null first()
 * @method static \Illuminate\Database\Eloquent\Collection<int, PermissionUser> get()
 * @method static PermissionUser create(array $attributes = [])
 * @method static PermissionUser firstOrCreate(array $attributes = [], array $values = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PermissionUser where(string|\Closure $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PermissionUser whereNotNull(string|\Illuminate\Contracts\Database\Query\Expression $columns)
 * @method static int count(string $columns = '*')
 *
 * @mixin IdeHelperPermissionUser
 * @mixin \Eloquent
 */
class PermissionUser extends ModelHasPermission {}
