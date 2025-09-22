<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD
<<<<<<< HEAD
use Modules\User\Models\Membership;
use Modules\Xot\Contracts\UserContract;
=======

>>>>>>> 079c9da7 (.)
=======

=======
use Modules\Xot\Contracts\UserContract;
use Modules\User\Models\Membership;
>>>>>>> e5f94125 (.)
>>>>>>> 10cce5c4 (.)

class MembershipPolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('membership.view.any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, Membership $membership): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return (
            $user->hasPermissionTo('membership.view') ||
            $user->id === $membership->user_id ||
            $user->hasRole('super-admin')
        );
=======
=======
>>>>>>> 10cce5c4 (.)

=======
        return $user->hasPermissionTo('membership.view') || 
>>>>>>> e5f94125 (.)
               $user->id === $membership->user_id ||
               $user->hasRole('super-admin');
>>>>>>> 079c9da7 (.)
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('membership.create');
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, Membership $_membership): bool
    {
        return $user->hasPermissionTo('membership.update') || $user->hasRole('super-admin');
=======
    public function update(UserContract $user, Membership $membership): bool
    {
<<<<<<< HEAD

=======
        return $user->hasPermissionTo('membership.update') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
>>>>>>> 079c9da7 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, Membership $_membership): bool
    {
        return $user->hasPermissionTo('membership.delete') || $user->hasRole('super-admin');
=======
    public function delete(UserContract $user, Membership $membership): bool
    {
<<<<<<< HEAD

=======
        return $user->hasPermissionTo('membership.delete') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
>>>>>>> 079c9da7 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, Membership $_membership): bool
    {
        return $user->hasPermissionTo('membership.restore') || $user->hasRole('super-admin');
=======
    public function restore(UserContract $user, Membership $membership): bool
    {
<<<<<<< HEAD

=======
        return $user->hasPermissionTo('membership.restore') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
>>>>>>> 079c9da7 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, Membership $membership): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('membership.force-delete') || $user->hasRole('super-admin');
=======
=======
>>>>>>> 10cce5c4 (.)

=======
        return $user->hasPermissionTo('membership.force-delete') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
>>>>>>> 079c9da7 (.)
    }
}
