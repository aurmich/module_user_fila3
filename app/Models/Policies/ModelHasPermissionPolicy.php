<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD
<<<<<<< HEAD
use Modules\User\Models\ModelHasPermission;
use Modules\Xot\Contracts\UserContract;
=======
=======
>>>>>>> 10cce5c4 (.)
use Modules\User\Contracts\UserContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> e5f94125 (.)
use Modules\User\Models\ModelHasPermission;
>>>>>>> 079c9da7 (.)

class ModelHasPermissionPolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('model-has-permission.view.any');
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, ModelHasPermission $_modelHasPermission): bool
    {
        return $user->hasPermissionTo('model-has-permission.view') || $user->hasRole('super-admin');
=======
    public function view(UserContract $user, ModelHasPermission $modelHasPermission): bool
    {
<<<<<<< HEAD
        return $user->hasRole('super-admin');
<<<<<<< HEAD
>>>>>>> 079c9da7 (.)
=======
=======
        return $user->hasPermissionTo('model-has-permission.view') || 
               $user->hasRole('super-admin');
>>>>>>> e5f94125 (.)
>>>>>>> 10cce5c4 (.)
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('model-has-permission.create');
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, ModelHasPermission $_modelHasPermission): bool
    {
        return $user->hasPermissionTo('model-has-permission.update') || $user->hasRole('super-admin');
=======
    public function update(UserContract $user, ModelHasPermission $modelHasPermission): bool
    {
<<<<<<< HEAD
        return $user->hasRole('super-admin');
<<<<<<< HEAD
>>>>>>> 079c9da7 (.)
=======
=======
        return $user->hasPermissionTo('model-has-permission.update') || 
               $user->hasRole('super-admin');
>>>>>>> e5f94125 (.)
>>>>>>> 10cce5c4 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, ModelHasPermission $_modelHasPermission): bool
    {
        return $user->hasPermissionTo('model-has-permission.delete') || $user->hasRole('super-admin');
=======
    public function delete(UserContract $user, ModelHasPermission $modelHasPermission): bool
    {
<<<<<<< HEAD
        return $user->hasRole('super-admin');
<<<<<<< HEAD
>>>>>>> 079c9da7 (.)
=======
=======
        return $user->hasPermissionTo('model-has-permission.delete') || 
               $user->hasRole('super-admin');
>>>>>>> e5f94125 (.)
>>>>>>> 10cce5c4 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, ModelHasPermission $_modelHasPermission): bool
    {
        return $user->hasPermissionTo('model-has-permission.restore') || $user->hasRole('super-admin');
=======
    public function restore(UserContract $user, ModelHasPermission $modelHasPermission): bool
    {
<<<<<<< HEAD
        return $user->hasRole('super-admin');
<<<<<<< HEAD
>>>>>>> 079c9da7 (.)
=======
=======
        return $user->hasPermissionTo('model-has-permission.restore') || 
               $user->hasRole('super-admin');
>>>>>>> e5f94125 (.)
>>>>>>> 10cce5c4 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, ModelHasPermission $modelHasPermission): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('model-has-permission.force-delete') || $user->hasRole('super-admin');
=======
=======
>>>>>>> 10cce5c4 (.)
        return $user->hasRole('super-admin');
>>>>>>> 079c9da7 (.)
    }
}
=======
        return $user->hasPermissionTo('model-has-permission.force-delete') || 
               $user->hasRole('super-admin');
    }
}
>>>>>>> e5f94125 (.)
