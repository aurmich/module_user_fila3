<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
use Modules\User\Models\AuthenticationLog;
=======

>>>>>>> 079c9da (.)
=======
use Modules\User\Models\AuthenticationLog;
use Modules\Xot\Contracts\UserContract;
>>>>>>> 9d96960 (.)

class AuthenticationLogPolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('authentication-log.view.any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, AuthenticationLog $authenticationLog): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('authentication-log.view') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('authentication-log.view') ||
>>>>>>> 9d96960 (.)
               $user->id === $authenticationLog->authenticatable_id ||
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('authentication-log.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, AuthenticationLog $authenticationLog): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('authentication-log.update') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('authentication-log.update') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, AuthenticationLog $authenticationLog): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('authentication-log.delete') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('authentication-log.delete') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, AuthenticationLog $authenticationLog): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('authentication-log.restore') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('authentication-log.restore') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, AuthenticationLog $authenticationLog): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('authentication-log.force-delete') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('authentication-log.force-delete') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }
}
