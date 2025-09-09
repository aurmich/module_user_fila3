<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
use Modules\User\Models\OauthAccessToken;
=======

>>>>>>> 079c9da (.)
=======
use Modules\User\Models\OauthAccessToken;
use Modules\Xot\Contracts\UserContract;
>>>>>>> 9d96960 (.)

class OauthAccessTokenPolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('oauth-access-token.view.any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, OauthAccessToken $oauthAccessToken): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('oauth-access-token.view') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('oauth-access-token.view') ||
>>>>>>> 9d96960 (.)
               $user->id === $oauthAccessToken->user_id ||
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('oauth-access-token.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, OauthAccessToken $oauthAccessToken): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('oauth-access-token.update') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('oauth-access-token.update') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, OauthAccessToken $oauthAccessToken): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('oauth-access-token.delete') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('oauth-access-token.delete') ||
>>>>>>> 9d96960 (.)
               $user->id === $oauthAccessToken->user_id ||
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, OauthAccessToken $oauthAccessToken): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('oauth-access-token.restore') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('oauth-access-token.restore') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, OauthAccessToken $oauthAccessToken): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('oauth-access-token.force-delete') || 
=======

>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('oauth-access-token.force-delete') ||
>>>>>>> 9d96960 (.)
               $user->hasRole('super-admin');
    }
}
