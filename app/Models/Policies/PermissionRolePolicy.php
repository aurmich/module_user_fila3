<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\User\Contracts\UserContract;
>>>>>>> 079c9da (.)
=======
>>>>>>> 9d96960 (.)
use Modules\User\Models\PermissionRole;
use Modules\Xot\Contracts\UserContract;

class PermissionRolePolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('permission-role.view.any');
<<<<<<< HEAD
<<<<<<< HEAD
    }

    /**
=======
    }    /**
>>>>>>> 079c9da (.)
=======
    }

    /**
>>>>>>> 9d96960 (.)
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, PermissionRole $permissionRole): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('permission-role.view') || 
=======
        return $user->hasPermissionTo('permission-role.view') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }

    /**
<<<<<<< HEAD
=======
        return $user->hasRole('super-admin');
    }    /**
>>>>>>> 079c9da (.)
=======
>>>>>>> 9d96960 (.)
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('permission-role.create');
<<<<<<< HEAD
<<<<<<< HEAD
    }

    /**
=======
    }    /**
>>>>>>> 079c9da (.)
=======
    }

    /**
>>>>>>> 9d96960 (.)
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, PermissionRole $permissionRole): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('permission-role.update') || 
=======
        return $user->hasPermissionTo('permission-role.update') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }

    /**
<<<<<<< HEAD
=======
        return $user->hasRole('super-admin');
    }    /**
>>>>>>> 079c9da (.)
=======
>>>>>>> 9d96960 (.)
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, PermissionRole $permissionRole): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('permission-role.delete') || 
=======
        return $user->hasPermissionTo('permission-role.delete') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }

    /**
<<<<<<< HEAD
=======
        return $user->hasRole('super-admin');
    }    /**
>>>>>>> 079c9da (.)
=======
>>>>>>> 9d96960 (.)
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, PermissionRole $permissionRole): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('permission-role.restore') || 
=======
        return $user->hasPermissionTo('permission-role.restore') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }

    /**
<<<<<<< HEAD
=======
        return $user->hasRole('super-admin');
    }    /**
>>>>>>> 079c9da (.)
=======
>>>>>>> 9d96960 (.)
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, PermissionRole $permissionRole): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('permission-role.force-delete') || 
               $user->hasRole('super-admin');
    }
}
=======
        return $user->hasRole('super-admin');
=======
        return $user->hasPermissionTo('permission-role.force-delete') ||
               $user->hasRole('super-admin');
>>>>>>> 9d96960 (.)
    }
}
>>>>>>> 079c9da (.)
