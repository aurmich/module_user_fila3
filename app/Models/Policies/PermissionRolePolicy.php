<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD
use Modules\User\Contracts\UserContract;
use Modules\User\Models\PermissionRole;
=======

>>>>>>> aurmich/dev

class PermissionRolePolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('permission-role.view.any');
<<<<<<< HEAD
    }    /**
=======
    }

    /**
>>>>>>> aurmich/dev
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, PermissionRole $permissionRole): bool
    {
<<<<<<< HEAD
        return $user->hasRole('super-admin');
    }    /**
=======

               $user->hasRole('super-admin');
    }

    /**
>>>>>>> aurmich/dev
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('permission-role.create');
<<<<<<< HEAD
    }    /**
=======
    }

    /**
>>>>>>> aurmich/dev
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, PermissionRole $permissionRole): bool
    {
<<<<<<< HEAD
        return $user->hasRole('super-admin');
    }    /**
=======

               $user->hasRole('super-admin');
    }

    /**
>>>>>>> aurmich/dev
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, PermissionRole $permissionRole): bool
    {
<<<<<<< HEAD
        return $user->hasRole('super-admin');
    }    /**
=======

               $user->hasRole('super-admin');
    }

    /**
>>>>>>> aurmich/dev
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, PermissionRole $permissionRole): bool
    {
<<<<<<< HEAD
        return $user->hasRole('super-admin');
    }    /**
=======

               $user->hasRole('super-admin');
    }

    /**
>>>>>>> aurmich/dev
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, PermissionRole $permissionRole): bool
    {
<<<<<<< HEAD
        return $user->hasRole('super-admin');
    }
}
=======

>>>>>>> aurmich/dev
