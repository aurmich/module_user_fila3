<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD

=======
use Modules\Xot\Contracts\UserContract;
use Modules\User\Models\SocialProvider;
>>>>>>> e5f94125 (.)

class SocialProviderPolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('social-provider.view.any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, SocialProvider $socialProvider): bool
    {
<<<<<<< HEAD

=======
        return $user->hasPermissionTo('social-provider.view') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('social-provider.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, SocialProvider $socialProvider): bool
    {
<<<<<<< HEAD

=======
        return $user->hasPermissionTo('social-provider.update') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, SocialProvider $socialProvider): bool
    {
<<<<<<< HEAD

=======
        return $user->hasPermissionTo('social-provider.delete') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, SocialProvider $socialProvider): bool
    {
<<<<<<< HEAD

=======
        return $user->hasPermissionTo('social-provider.restore') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, SocialProvider $socialProvider): bool
    {
<<<<<<< HEAD

=======
        return $user->hasPermissionTo('social-provider.force-delete') || 
>>>>>>> e5f94125 (.)
               $user->hasRole('super-admin');
    }
}
