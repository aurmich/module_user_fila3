<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
use Modules\User\Models\DeviceUser;
=======

>>>>>>> 079c9da (.)
=======
use Modules\User\Models\DeviceUser;
use Modules\Xot\Contracts\UserContract;
>>>>>>> 9d96960 (.)

class DeviceUserPolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('device-user.view.any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, DeviceUser $deviceUser): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('device-user.view') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('device-user.view') ||
>>>>>>> 9d96960 (.)
               $user->id === $deviceUser->user_id ||
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('device-user.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, DeviceUser $deviceUser): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('device-user.update') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('device-user.update') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, DeviceUser $deviceUser): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('device-user.delete') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('device-user.delete') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, DeviceUser $deviceUser): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('device-user.restore') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('device-user.restore') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, DeviceUser $deviceUser): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('device-user.force-delete') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('device-user.force-delete') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }
}
