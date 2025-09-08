<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD

=======
use Modules\Xot\Contracts\UserContract;
use Modules\User\Models\Membership;
>>>>>>> e5f94125 (.)

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

=======
        return $user->hasPermissionTo('membership.view') || 
>>>>>>> e5f94125 (.)
               $user->id === $membership->user_id ||
               $user->hasRole('super-admin');
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
    public function update(UserContract $user, Membership $membership): bool
    {
<<<<<<< HEAD

=======
        return $user->hasPermissionTo('membership.update') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, Membership $membership): bool
    {
<<<<<<< HEAD

=======
        return $user->hasPermissionTo('membership.delete') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, Membership $membership): bool
    {
<<<<<<< HEAD

=======
        return $user->hasPermissionTo('membership.restore') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, Membership $membership): bool
    {
<<<<<<< HEAD

=======
        return $user->hasPermissionTo('membership.force-delete') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
    }
}
