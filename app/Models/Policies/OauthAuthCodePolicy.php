<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> e5f94125 (.)
use Modules\User\Models\OauthAuthCode;

class OauthAuthCodePolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('oauth-auth-code.view.any'); /** @phpstan-ignore method.nonObject */
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('oauth-auth-code.view.any');
>>>>>>> e5f94125 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(ProfileContract $user, OauthAuthCode $oauthAuthCode): bool
    {
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
=======
    public function view(UserContract $user, OauthAuthCode $oauthAuthCode): bool
    {
        return $user->hasPermissionTo('oauth-auth-code.view') || 
               $user->hasRole('super-admin');
>>>>>>> e5f94125 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('oauth-auth-code.create'); /** @phpstan-ignore method.nonObject */
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('oauth-auth-code.create');
>>>>>>> e5f94125 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(ProfileContract $user, OauthAuthCode $oauthAuthCode): bool
    {
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
=======
    public function update(UserContract $user, OauthAuthCode $oauthAuthCode): bool
    {
        return $user->hasPermissionTo('oauth-auth-code.update') || 
               $user->hasRole('super-admin');
>>>>>>> e5f94125 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(ProfileContract $user, OauthAuthCode $oauthAuthCode): bool
    {
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
=======
    public function delete(UserContract $user, OauthAuthCode $oauthAuthCode): bool
    {
        return $user->hasPermissionTo('oauth-auth-code.delete') || 
               $user->hasRole('super-admin');
>>>>>>> e5f94125 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(ProfileContract $user, OauthAuthCode $oauthAuthCode): bool
    {
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
=======
    public function restore(UserContract $user, OauthAuthCode $oauthAuthCode): bool
    {
        return $user->hasPermissionTo('oauth-auth-code.restore') || 
               $user->hasRole('super-admin');
>>>>>>> e5f94125 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
    public function forceDelete(ProfileContract $user, OauthAuthCode $oauthAuthCode): bool
    {
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }
}
=======
    public function forceDelete(UserContract $user, OauthAuthCode $oauthAuthCode): bool
    {
        return $user->hasPermissionTo('oauth-auth-code.force-delete') || 
               $user->hasRole('super-admin');
    }
}
>>>>>>> e5f94125 (.)
