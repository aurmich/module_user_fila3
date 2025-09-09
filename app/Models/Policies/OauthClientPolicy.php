<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
use Modules\User\Models\OauthClient;
=======

>>>>>>> 079c9da (.)
=======
use Modules\User\Models\OauthClient;
use Modules\Xot\Contracts\UserContract;
>>>>>>> 9d96960 (.)

class OauthClientPolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('oauth-client.view.any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, OauthClient $oauthClient): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('oauth-client.view') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('oauth-client.view') ||
>>>>>>> 9d96960 (.)
               $user->id === $oauthClient->user_id ||
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('oauth-client.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, OauthClient $oauthClient): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('oauth-client.update') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('oauth-client.update') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, OauthClient $oauthClient): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('oauth-client.delete') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('oauth-client.delete') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, OauthClient $oauthClient): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('oauth-client.restore') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('oauth-client.restore') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, OauthClient $oauthClient): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('oauth-client.force-delete') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('oauth-client.force-delete') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }
}
