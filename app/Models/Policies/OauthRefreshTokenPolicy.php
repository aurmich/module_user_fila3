<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\User\Models\OauthRefreshToken;
use Modules\Xot\Contracts\UserContract;
=======
=======
>>>>>>> 10cce5c4 (.)
=======
>>>>>>> 8b2de289 (.)
use Modules\User\Contracts\UserContract;
use Modules\User\Models\OauthRefreshToken;
>>>>>>> 079c9da7 (.)

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
<<<<<<< HEAD
    public function view(UserContract $user, OauthRefreshToken $_oauthRefreshToken): bool
    {
        return $user->hasPermissionTo('oauth-refresh-token.view') || $user->hasRole('super-admin');
=======
    public function view(UserContract $user, OauthRefreshToken $oauthRefreshToken): bool
    {
        return $user->hasRole('super-admin');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 079c9da7 (.)
=======
=======
        return $user->hasPermissionTo('oauth-refresh-token.view') || 
               $user->hasRole('super-admin');
>>>>>>> e5f94125 (.)
>>>>>>> 10cce5c4 (.)
=======
>>>>>>> 8b2de289 (.)
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
<<<<<<< HEAD
    public function update(UserContract $user, OauthRefreshToken $_oauthRefreshToken): bool
    {
        return $user->hasPermissionTo('oauth-refresh-token.update') || $user->hasRole('super-admin');
=======
    public function update(UserContract $user, OauthRefreshToken $oauthRefreshToken): bool
    {
        return $user->hasRole('super-admin');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 079c9da7 (.)
=======
=======
        return $user->hasPermissionTo('oauth-refresh-token.update') || 
               $user->hasRole('super-admin');
>>>>>>> e5f94125 (.)
>>>>>>> 10cce5c4 (.)
=======
>>>>>>> 8b2de289 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, OauthRefreshToken $_oauthRefreshToken): bool
    {
        return $user->hasPermissionTo('oauth-refresh-token.delete') || $user->hasRole('super-admin');
=======
    public function delete(UserContract $user, OauthRefreshToken $oauthRefreshToken): bool
    {
        return $user->hasRole('super-admin');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 079c9da7 (.)
=======
=======
        return $user->hasPermissionTo('oauth-refresh-token.delete') || 
               $user->hasRole('super-admin');
>>>>>>> e5f94125 (.)
>>>>>>> 10cce5c4 (.)
=======
>>>>>>> 8b2de289 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, OauthRefreshToken $_oauthRefreshToken): bool
    {
        return $user->hasPermissionTo('oauth-refresh-token.restore') || $user->hasRole('super-admin');
=======
    public function restore(UserContract $user, OauthRefreshToken $oauthRefreshToken): bool
    {
        return $user->hasRole('super-admin');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 079c9da7 (.)
=======
=======
        return $user->hasPermissionTo('oauth-refresh-token.restore') || 
               $user->hasRole('super-admin');
>>>>>>> e5f94125 (.)
>>>>>>> 10cce5c4 (.)
=======
>>>>>>> 8b2de289 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, OauthRefreshToken $oauthRefreshToken): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $user->hasPermissionTo('oauth-refresh-token.force-delete') || $user->hasRole('super-admin');
=======
=======
>>>>>>> 10cce5c4 (.)
=======
>>>>>>> 8b2de289 (.)
        return $user->hasRole('super-admin');
>>>>>>> 079c9da7 (.)
    }
}
