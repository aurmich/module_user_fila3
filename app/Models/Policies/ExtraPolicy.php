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
use Modules\User\Models\Extra;
use Modules\Xot\Contracts\UserContract;

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
    public function view(UserContract $user, Extra $extra): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('extra.view') || 
=======
        return $user->id === $extra->user_id ||
>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('extra.view') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
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
    public function update(UserContract $user, Extra $extra): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('extra.update') || 
=======
        return $user->id === $extra->user_id ||
>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('extra.update') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, Extra $extra): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('extra.delete') || 
=======
        return $user->id === $extra->user_id ||
>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('extra.delete') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, Extra $extra): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('extra.restore') || 
               $user->hasRole('super-admin');
=======
        return $user->hasRole('super-admin');
>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('extra.restore') ||
               $user->hasRole('super-admin');
>>>>>>> 9d96960 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, Extra $extra): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('extra.force-delete') || 
               $user->hasRole('super-admin');
    }
}
=======
        return $user->hasRole('super-admin');
=======
        return $user->hasPermissionTo('extra.force-delete') ||
               $user->hasRole('super-admin');
>>>>>>> 9d96960 (.)
    }
}
>>>>>>> 079c9da (.)
