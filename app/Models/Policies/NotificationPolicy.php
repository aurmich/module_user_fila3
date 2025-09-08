<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

class NotificationPolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('notification.view.any'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(ProfileContract $user, Notification $notification): bool
    {

        $user->id === $notification->notifiable_id ||
        $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('notification.create'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(ProfileContract $user, Notification $notification): bool
    {

        $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(ProfileContract $user, Notification $notification): bool
    {

        $user->id === $notification->notifiable_id ||
        $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(ProfileContract $user, Notification $notification): bool
    {

        $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(ProfileContract $user, Notification $notification): bool
    {

        $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }
}
