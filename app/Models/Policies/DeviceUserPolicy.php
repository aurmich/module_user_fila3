<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\User\Models\DeviceUser;
use Modules\Xot\Contracts\UserContract;
=======

>>>>>>> 079c9da7 (.)
=======

=======
use Modules\Xot\Contracts\UserContract;
use Modules\User\Models\DeviceUser;
>>>>>>> e5f94125 (.)
>>>>>>> 10cce5c4 (.)
=======

>>>>>>> 8b2de289 (.)

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
<<<<<<< HEAD
        return (
            $user->hasPermissionTo('device-user.view') ||
            $user->id === $deviceUser->user_id ||
            $user->hasRole('super-admin')
        );
=======
=======
>>>>>>> 10cce5c4 (.)
=======
>>>>>>> 8b2de289 (.)

               $user->id === $deviceUser->user_id ||
               $user->hasRole('super-admin');
>>>>>>> 079c9da7 (.)
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
<<<<<<< HEAD
    public function update(UserContract $user, DeviceUser $_deviceUser): bool
    {
        return $user->hasPermissionTo('device-user.update') || $user->hasRole('super-admin');
=======
    public function update(UserContract $user, DeviceUser $deviceUser): bool
    {

               $user->hasRole('super-admin');
>>>>>>> 079c9da7 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, DeviceUser $_deviceUser): bool
    {
        return $user->hasPermissionTo('device-user.delete') || $user->hasRole('super-admin');
=======
    public function delete(UserContract $user, DeviceUser $deviceUser): bool
    {

               $user->hasRole('super-admin');
>>>>>>> 079c9da7 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, DeviceUser $_deviceUser): bool
    {
        return $user->hasPermissionTo('device-user.restore') || $user->hasRole('super-admin');
=======
    public function restore(UserContract $user, DeviceUser $deviceUser): bool
    {

               $user->hasRole('super-admin');
>>>>>>> 079c9da7 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, DeviceUser $deviceUser): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('device-user.force-delete') || $user->hasRole('super-admin');
=======
=======
>>>>>>> 10cce5c4 (.)
=======
>>>>>>> 8b2de289 (.)

               $user->hasRole('super-admin');
>>>>>>> 079c9da7 (.)
    }
}
