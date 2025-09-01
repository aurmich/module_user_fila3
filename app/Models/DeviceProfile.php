<?php

declare(strict_types=1);

namespace Modules\User\Models;

/**
 * DeviceProfile Model
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> 8055579 (.)
=======
 * 
>>>>>>> 8d82f8c (.)
 * Represents the relationship between a device and a user profile.
 * Extends the base DeviceUser model to add specific functionality.
 *
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property Device|null $device
 * @property \Modules\Xot\Contracts\ProfileContract|null $profile
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 * @property User|null $user
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DeviceProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DeviceProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DeviceProfile query()
 *
=======
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DeviceProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DeviceProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DeviceProfile query()
>>>>>>> 8055579 (.)
=======
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DeviceProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DeviceProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DeviceProfile query()
>>>>>>> 8d82f8c (.)
 * @mixin IdeHelperDeviceProfile
 * @mixin \Eloquent
 */
class DeviceProfile extends DeviceUser
{
    /**
     * Create a new model instance.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $attributes
=======
     * @param array<string, mixed> $attributes
>>>>>>> 8055579 (.)
=======
     * @param array<string, mixed> $attributes
>>>>>>> 8d82f8c (.)
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}
