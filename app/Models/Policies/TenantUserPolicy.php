<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD
use Modules\User\Contracts\UserContract;
=======
use Modules\User\Contracts\ProfileContract;
>>>>>>> 9cfda9d (.)
use Modules\User\Models\TenantUser;

class TenantUserPolicy extends UserBasePolicy
{
<<<<<<< HEAD
	/**
	 * Determine whether the user can view any models.
	 */
	public function viewAny(UserContract $user): bool
	{
		return $user->hasPermissionTo('tenant-user.view.any');
	}

	/**
	 * Determine whether the user can view the model.
	 */
	public function view(UserContract $user, TenantUser $tenantUser): bool
	{
		return $user->id === $tenantUser->user_id ||
			$user->tenants->contains($tenantUser->tenant_id) ||
			$user->hasRole('super-admin');
	}

	/**
	 * Determine whether the user can create models.
	 */
	public function create(UserContract $user): bool
	{
		return $user->hasPermissionTo('tenant-user.create');
	}

	/**
	 * Determine whether the user can update the model.
	 */
	public function update(UserContract $user, TenantUser $tenantUser): bool
	{
		return $user->hasRole('super-admin');
	}

	/**
	 * Determine whether the user can delete the model.
	 */
	public function delete(UserContract $user, TenantUser $tenantUser): bool
	{
		return $user->hasRole('super-admin');
	}

	/**
	 * Determine whether the user can restore the model.
	 */
	public function restore(UserContract $user, TenantUser $tenantUser): bool
	{
		return $user->hasRole('super-admin');
	}

	/**
	 * Determine whether the user can permanently delete the model.
	 */
	public function forceDelete(UserContract $user, TenantUser $tenantUser): bool
	{
		return $user->hasRole('super-admin');
	}
=======
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('tenant-user.view.any'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(ProfileContract $user, TenantUser $tenantUser): bool
    {
        return $user->id === $tenantUser->user_id ||
            $user->tenants->contains($tenantUser->tenant_id) ||
            $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('tenant-user.create'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(ProfileContract $user, TenantUser $tenantUser): bool
    {
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(ProfileContract $user, TenantUser $tenantUser): bool
    {
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(ProfileContract $user, TenantUser $tenantUser): bool
    {
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(ProfileContract $user, TenantUser $tenantUser): bool
    {
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }
>>>>>>> 9cfda9d (.)
}
