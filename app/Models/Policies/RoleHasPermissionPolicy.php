<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD
use Modules\User\Contracts\UserContract;
=======
use Modules\User\Contracts\ProfileContract;
>>>>>>> 9cfda9d (.)
use Modules\User\Models\RoleHasPermission;

class RoleHasPermissionPolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('role-has-permission.view.any'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(ProfileContract $user, RoleHasPermission $roleHasPermission): bool
    {
<<<<<<< HEAD
        return $user->hasRole('super-admin');
=======
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
>>>>>>> 9cfda9d (.)
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('role-has-permission.create'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(ProfileContract $user, RoleHasPermission $roleHasPermission): bool
    {
<<<<<<< HEAD
        return $user->hasRole('super-admin');
=======
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
>>>>>>> 9cfda9d (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(ProfileContract $user, RoleHasPermission $roleHasPermission): bool
    {
<<<<<<< HEAD
        return $user->hasRole('super-admin');
=======
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
>>>>>>> 9cfda9d (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(ProfileContract $user, RoleHasPermission $roleHasPermission): bool
    {
<<<<<<< HEAD
        return $user->hasRole('super-admin');
=======
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
>>>>>>> 9cfda9d (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(ProfileContract $user, RoleHasPermission $roleHasPermission): bool
    {
<<<<<<< HEAD
        return $user->hasRole('super-admin');
=======
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
>>>>>>> 9cfda9d (.)
    }
}
