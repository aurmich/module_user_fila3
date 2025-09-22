<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD
<<<<<<< HEAD
class NotificationPolicy extends UserBasePolicy
{
=======
=======
>>>>>>> 10cce5c4 (.)

=======
use Modules\Xot\Contracts\UserContract;
use Modules\User\Models\Notification;
>>>>>>> e5f94125 (.)

class NotificationPolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('notification.view.any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, Notification $notification): bool
    {
<<<<<<< HEAD

=======
        return $user->hasPermissionTo('notification.view') || 
>>>>>>> e5f94125 (.)
               $user->id === $notification->notifiable_id ||
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('notification.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, Notification $notification): bool
    {
<<<<<<< HEAD

=======
        return $user->hasPermissionTo('notification.update') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, Notification $notification): bool
    {
<<<<<<< HEAD

=======
        return $user->hasPermissionTo('notification.delete') || 
>>>>>>> e5f94125 (.)
               $user->id === $notification->notifiable_id ||
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, Notification $notification): bool
    {
<<<<<<< HEAD

=======
        return $user->hasPermissionTo('notification.restore') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, Notification $notification): bool
    {
<<<<<<< HEAD

=======
        return $user->hasPermissionTo('notification.force-delete') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
    }
>>>>>>> 079c9da7 (.)
}
