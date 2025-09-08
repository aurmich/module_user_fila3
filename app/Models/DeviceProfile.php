<?php

declare(strict_types=1);

namespace Modules\User\Models;

/**
 * DeviceProfile Model
 *
 * Represents the relationship between a device and a user profile.
 * Extends the base DeviceUser model to add specific functionality.
 *
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property Device|null $device
 * @property \Modules\Xot\Contracts\ProfileContract|null $profile
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 * @property User|null $user
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DeviceProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DeviceProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DeviceProfile query()
 * @method static DeviceProfile|null first()
 * @method static \Illuminate\Database\Eloquent\Collection<int, DeviceProfile> get()
 * @method static DeviceProfile create(array $attributes = [])
 * @method static DeviceProfile firstOrCreate(array $attributes = [], array $values = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DeviceProfile where(string|\Closure $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DeviceProfile whereNotNull(string|\Illuminate\Contracts\Database\Query\Expression $columns)
 * @method static int count(string $columns = '*')
 *
 * @mixin IdeHelperDeviceProfile
 * @mixin \Eloquent
 */
class DeviceProfile extends DeviceUser
{
    /**
     * Create a new model instance.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}
