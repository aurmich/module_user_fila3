<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\User\Contracts\UserContract;
>>>>>>> 079c9da (.)
use Modules\User\Models\DeviceProfile;

class DeviceProfilePolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('device-profile.view.any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, DeviceProfile $deviceProfile): bool
    {
<<<<<<< HEAD
        return $user->hasPermissionTo('device-profile.view') || 
               $user->id === $deviceProfile->user_id ||
=======
        return $user->id === $deviceProfile->user_id ||
>>>>>>> 079c9da (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('device-profile.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, DeviceProfile $deviceProfile): bool
    {
<<<<<<< HEAD
        return $user->hasPermissionTo('device-profile.update') || 
=======
        return $user->id === $deviceProfile->user_id ||
>>>>>>> 079c9da (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, DeviceProfile $deviceProfile): bool
    {
<<<<<<< HEAD
        return $user->hasPermissionTo('device-profile.delete') || 
=======
        return $user->id === $deviceProfile->user_id ||
>>>>>>> 079c9da (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, DeviceProfile $deviceProfile): bool
    {
<<<<<<< HEAD
        return $user->hasPermissionTo('device-profile.restore') || 
               $user->hasRole('super-admin');
=======
        return $user->hasRole('super-admin');
>>>>>>> 079c9da (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, DeviceProfile $deviceProfile): bool
    {
<<<<<<< HEAD
        return $user->hasPermissionTo('device-profile.force-delete') || 
               $user->hasRole('super-admin');
    }
}
=======
        return $user->hasRole('super-admin');
    }
}
>>>>>>> 079c9da (.)
