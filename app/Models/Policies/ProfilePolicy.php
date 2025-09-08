<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

class ProfilePolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(ProfileContract $user): bool
    {
        return $this->hasPermission($user, 'profile.view.any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(ProfileContract $user, Profile $profile): bool
    {

        $user->id === $profile->user_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(ProfileContract $user): bool
    {
        return $this->hasPermission($user, 'profile.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(ProfileContract $user, Profile $profile): bool
    {

        $user->id === $profile->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(ProfileContract $user, Profile $profile): bool
    {
        return $this->hasPermission($user, 'profile.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(ProfileContract $user, Profile $profile): bool
    {
        return $this->hasPermission($user, 'profile.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(ProfileContract $user, Profile $profile): bool
    {
        return $this->hasPermission($user, 'profile.force-delete');
    }
}
