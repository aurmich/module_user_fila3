<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD

=======
use Modules\Xot\Contracts\UserContract;
use Modules\User\Models\Feature;
>>>>>>> e5f94125 (.)

class FeaturePolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('feature.view.any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, Feature $feature): bool
    {
<<<<<<< HEAD

=======
        return $user->hasPermissionTo('feature.view') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('feature.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, Feature $feature): bool
    {
<<<<<<< HEAD

=======
        return $user->hasPermissionTo('feature.update') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, Feature $feature): bool
    {
<<<<<<< HEAD

=======
        return $user->hasPermissionTo('feature.delete') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, Feature $feature): bool
    {
<<<<<<< HEAD

=======
        return $user->hasPermissionTo('feature.restore') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, Feature $feature): bool
    {
<<<<<<< HEAD

=======
        return $user->hasPermissionTo('feature.force-delete') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
    }
}
