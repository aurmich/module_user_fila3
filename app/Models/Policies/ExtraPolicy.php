<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD
<<<<<<< HEAD
use Modules\User\Models\Extra;
use Modules\Xot\Contracts\UserContract;
=======
=======
>>>>>>> 10cce5c4 (.)
use Modules\User\Contracts\UserContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> e5f94125 (.)
use Modules\User\Models\Extra;
>>>>>>> 079c9da7 (.)

class ExtraPolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('extra.view.any');
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, Extra $_extra): bool
    {
        return $user->hasPermissionTo('extra.view') || $user->hasRole('super-admin');
=======
    public function view(UserContract $user, Extra $extra): bool
    {
<<<<<<< HEAD
        return $user->id === $extra->user_id ||
=======
        return $user->hasPermissionTo('extra.view') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
>>>>>>> 079c9da7 (.)
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('extra.create');
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, Extra $_extra): bool
    {
        return $user->hasPermissionTo('extra.update') || $user->hasRole('super-admin');
=======
    public function update(UserContract $user, Extra $extra): bool
    {
<<<<<<< HEAD
        return $user->id === $extra->user_id ||
=======
        return $user->hasPermissionTo('extra.update') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
>>>>>>> 079c9da7 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, Extra $_extra): bool
    {
        return $user->hasPermissionTo('extra.delete') || $user->hasRole('super-admin');
=======
    public function delete(UserContract $user, Extra $extra): bool
    {
<<<<<<< HEAD
        return $user->id === $extra->user_id ||
=======
        return $user->hasPermissionTo('extra.delete') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
>>>>>>> 079c9da7 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, Extra $_extra): bool
    {
        return $user->hasPermissionTo('extra.restore') || $user->hasRole('super-admin');
=======
    public function restore(UserContract $user, Extra $extra): bool
    {
<<<<<<< HEAD
        return $user->hasRole('super-admin');
<<<<<<< HEAD
>>>>>>> 079c9da7 (.)
=======
=======
        return $user->hasPermissionTo('extra.restore') || 
               $user->hasRole('super-admin');
>>>>>>> e5f94125 (.)
>>>>>>> 10cce5c4 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, Extra $extra): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('extra.force-delete') || $user->hasRole('super-admin');
=======
=======
>>>>>>> 10cce5c4 (.)
        return $user->hasRole('super-admin');
>>>>>>> 079c9da7 (.)
    }
}
=======
        return $user->hasPermissionTo('extra.force-delete') || 
               $user->hasRole('super-admin');
    }
}
>>>>>>> e5f94125 (.)
