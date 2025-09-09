<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
use Modules\User\Models\PasswordReset;
=======

>>>>>>> 079c9da (.)
=======
use Modules\User\Models\PasswordReset;
use Modules\Xot\Contracts\UserContract;
>>>>>>> 9d96960 (.)

class PasswordResetPolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('password-reset.view.any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, PasswordReset $passwordReset): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('password-reset.view') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('password-reset.view') ||
>>>>>>> 9d96960 (.)
               $user->email === $passwordReset->email ||
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('password-reset.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, PasswordReset $passwordReset): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('password-reset.update') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('password-reset.update') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, PasswordReset $passwordReset): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('password-reset.delete') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('password-reset.delete') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, PasswordReset $passwordReset): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('password-reset.restore') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('password-reset.restore') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, PasswordReset $passwordReset): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('password-reset.force-delete') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('password-reset.force-delete') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }
}
