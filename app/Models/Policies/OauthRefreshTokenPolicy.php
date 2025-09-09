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
use Modules\User\Models\OauthRefreshToken;
use Modules\Xot\Contracts\UserContract;

class OauthRefreshTokenPolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('oauth-refresh-token.view.any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, OauthRefreshToken $oauthRefreshToken): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('oauth-refresh-token.view') || 
               $user->hasRole('super-admin');
=======
        return $user->hasRole('super-admin');
>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('oauth-refresh-token.view') ||
               $user->hasRole('super-admin');
>>>>>>> 9d96960 (.)
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('oauth-refresh-token.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, OauthRefreshToken $oauthRefreshToken): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('oauth-refresh-token.update') || 
               $user->hasRole('super-admin');
=======
        return $user->hasRole('super-admin');
>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('oauth-refresh-token.update') ||
               $user->hasRole('super-admin');
>>>>>>> 9d96960 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, OauthRefreshToken $oauthRefreshToken): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('oauth-refresh-token.delete') || 
               $user->hasRole('super-admin');
=======
        return $user->hasRole('super-admin');
>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('oauth-refresh-token.delete') ||
               $user->hasRole('super-admin');
>>>>>>> 9d96960 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, OauthRefreshToken $oauthRefreshToken): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('oauth-refresh-token.restore') || 
               $user->hasRole('super-admin');
=======
        return $user->hasRole('super-admin');
>>>>>>> 079c9da (.)
=======
        return $user->hasPermissionTo('oauth-refresh-token.restore') ||
               $user->hasRole('super-admin');
>>>>>>> 9d96960 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, OauthRefreshToken $oauthRefreshToken): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('oauth-refresh-token.force-delete') || 
               $user->hasRole('super-admin');
    }
}
=======
        return $user->hasRole('super-admin');
=======
        return $user->hasPermissionTo('oauth-refresh-token.force-delete') ||
               $user->hasRole('super-admin');
>>>>>>> 9d96960 (.)
    }
}
>>>>>>> 079c9da (.)
