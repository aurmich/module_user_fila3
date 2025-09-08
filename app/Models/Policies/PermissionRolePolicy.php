<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD
use Modules\User\Contracts\UserContract;
=======
use Modules\User\Contracts\ProfileContract;
>>>>>>> 9cfda9d (.)
use Modules\User\Models\PermissionRole;

class PermissionRolePolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(ProfileContract $user): bool
    {
<<<<<<< HEAD
        return $user->hasPermissionTo('permission-role.view.any');
    }    /**
=======
        return $user->hasPermissionTo('permission-role.view.any'); /** @phpstan-ignore method.nonObject */
    }

    /**
>>>>>>> 9cfda9d (.)
     * Determine whether the user can view the model.
     */
    public function view(ProfileContract $user, PermissionRole $permissionRole): bool
    {
<<<<<<< HEAD
        return $user->hasRole('super-admin');
    }    /**
=======
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }

    /**
>>>>>>> 9cfda9d (.)
     * Determine whether the user can create models.
     */
    public function create(ProfileContract $user): bool
    {
<<<<<<< HEAD
        return $user->hasPermissionTo('permission-role.create');
    }    /**
=======
        return $user->hasPermissionTo('permission-role.create'); /** @phpstan-ignore method.nonObject */
    }

    /**
>>>>>>> 9cfda9d (.)
     * Determine whether the user can update the model.
     */
    public function update(ProfileContract $user, PermissionRole $permissionRole): bool
    {
<<<<<<< HEAD
        return $user->hasRole('super-admin');
    }    /**
=======
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }

    /**
>>>>>>> 9cfda9d (.)
     * Determine whether the user can delete the model.
     */
    public function delete(ProfileContract $user, PermissionRole $permissionRole): bool
    {
<<<<<<< HEAD
        return $user->hasRole('super-admin');
    }    /**
=======
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }

    /**
>>>>>>> 9cfda9d (.)
     * Determine whether the user can restore the model.
     */
    public function restore(ProfileContract $user, PermissionRole $permissionRole): bool
    {
<<<<<<< HEAD
        return $user->hasRole('super-admin');
    }    /**
=======
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }

    /**
>>>>>>> 9cfda9d (.)
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(ProfileContract $user, PermissionRole $permissionRole): bool
    {
<<<<<<< HEAD
        return $user->hasRole('super-admin');
=======
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
>>>>>>> 9cfda9d (.)
    }
}
