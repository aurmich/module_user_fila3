<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\User\Contracts\UserContract;
>>>>>>> 079c9da (.)
use Modules\User\Models\RoleHasPermission;

class RoleHasPermissionPolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('role-has-permission.view.any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, RoleHasPermission $roleHasPermission): bool
    {
<<<<<<< HEAD
        return $user->hasPermissionTo('role-has-permission.view') || 
               $user->hasRole('super-admin');
=======
        return $user->hasRole('super-admin');
>>>>>>> 079c9da (.)
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('role-has-permission.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, RoleHasPermission $roleHasPermission): bool
    {
<<<<<<< HEAD
        return $user->hasPermissionTo('role-has-permission.update') || 
               $user->hasRole('super-admin');
=======
        return $user->hasRole('super-admin');
>>>>>>> 079c9da (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, RoleHasPermission $roleHasPermission): bool
    {
<<<<<<< HEAD
        return $user->hasPermissionTo('role-has-permission.delete') || 
               $user->hasRole('super-admin');
=======
        return $user->hasRole('super-admin');
>>>>>>> 079c9da (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, RoleHasPermission $roleHasPermission): bool
    {
<<<<<<< HEAD
        return $user->hasPermissionTo('role-has-permission.restore') || 
               $user->hasRole('super-admin');
=======
        return $user->hasRole('super-admin');
>>>>>>> 079c9da (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, RoleHasPermission $roleHasPermission): bool
    {
<<<<<<< HEAD
        return $user->hasPermissionTo('role-has-permission.force-delete') || 
               $user->hasRole('super-admin');
    }
}
=======
        return $user->hasRole('super-admin');
    }
}
>>>>>>> 079c9da (.)
