<?php

declare(strict_types=1);

namespace Modules\User\Models\Policies;

<<<<<<< HEAD
use Modules\User\Contracts\UserContract;
=======
use Modules\User\Contracts\ProfileContract;
>>>>>>> 9cfda9d (.)
use Modules\User\Models\Tenant;

class TenantPolicy extends UserBasePolicy
{
<<<<<<< HEAD
	/**
	 * Determine whether the user can view any models.
	 */
	public function viewAny(UserContract $user): bool
	{
		return $user->hasPermissionTo('tenant.view.any');
	}

	/**
	 * Determine whether the user can view the model.
	 */
	public function view(UserContract $user, Tenant $tenant): bool
	{
		return $user->tenants->contains($tenant->id) ||
			$user->hasRole('super-admin');
	}

	/**
	 * Determine whether the user can create models.
	 */
	public function create(UserContract $user): bool
	{
		return $user->hasPermissionTo('tenant.create');
	}

	/**
	 * Determine whether the user can update the model.
	 */
	public function update(UserContract $user, Tenant $tenant): bool
	{
		return $user->hasRole('super-admin');
	}

	/**
	 * Determine whether the user can delete the model.
	 */
	public function delete(UserContract $user, Tenant $tenant): bool
	{
		return $user->hasRole('super-admin');
	}

	/**
	 * Determine whether the user can restore the model.
	 */
	public function restore(UserContract $user, Tenant $tenant): bool
	{
		return $user->hasRole('super-admin');
	}

	/**
	 * Determine whether the user can permanently delete the model.
	 */
	public function forceDelete(UserContract $user, Tenant $tenant): bool
	{
		return $user->hasRole('super-admin');
	}
=======
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('tenant.view.any'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(ProfileContract $user, Tenant $tenant): bool
    {
        return $user->tenants->contains($tenant->id) ||
            $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('tenant.create'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(ProfileContract $user, Tenant $tenant): bool
    {
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(ProfileContract $user, Tenant $tenant): bool
    {
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(ProfileContract $user, Tenant $tenant): bool
    {
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(ProfileContract $user, Tenant $tenant): bool
    {
        return $user->hasRole('super-admin'); /** @phpstan-ignore method.nonObject */
    }
>>>>>>> 9cfda9d (.)
}
