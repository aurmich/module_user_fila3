<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

class MembershipPolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('membership.view.any'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(ProfileContract $user, Membership $membership): bool
    {

        $user->id === $membership->user_id ||
        $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('membership.create'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(ProfileContract $user, Membership $membership): bool
    {

        $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(ProfileContract $user, Membership $membership): bool
    {

        $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(ProfileContract $user, Membership $membership): bool
    {

        $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(ProfileContract $user, Membership $membership): bool
    {

        $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }
}
