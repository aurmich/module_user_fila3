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
use Modules\User\Models\Tenant;
use Modules\Xot\Contracts\UserContract;

class TenantPolicy extends UserBasePolicy
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9d96960 (.)
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('tenant.view.any');
    }
<<<<<<< HEAD

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, Tenant $tenant): bool
    {
        return $user->hasPermissionTo('tenant.view') || 
               $user->tenants->contains($tenant->id) ||
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
        return $user->hasPermissionTo('tenant.update') || 
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, Tenant $tenant): bool
    {
        return $user->hasPermissionTo('tenant.delete') || 
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, Tenant $tenant): bool
    {
        return $user->hasPermissionTo('tenant.restore') || 
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, Tenant $tenant): bool
    {
        return $user->hasPermissionTo('tenant.force-delete') || 
               $user->hasRole('super-admin');
    }
=======
	/**
	 * Determine whether the user can view any models.
	 */
	public function viewAny(UserContract $user): bool
	{
		return $user->hasPermissionTo('tenant.view.any');
	}
=======
>>>>>>> 9d96960 (.)

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, Tenant $tenant): bool
    {
        return $user->hasPermissionTo('tenant.view') ||
               $user->tenants->contains($tenant->id) ||
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
        return $user->hasPermissionTo('tenant.update') ||
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, Tenant $tenant): bool
    {
        return $user->hasPermissionTo('tenant.delete') ||
               $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, Tenant $tenant): bool
    {
        return $user->hasPermissionTo('tenant.restore') ||
               $user->hasRole('super-admin');
    }

<<<<<<< HEAD
	/**
	 * Determine whether the user can permanently delete the model.
	 */
	public function forceDelete(UserContract $user, Tenant $tenant): bool
	{
		return $user->hasRole('super-admin');
	}
>>>>>>> 079c9da (.)
=======
    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, Tenant $tenant): bool
    {
        return $user->hasPermissionTo('tenant.force-delete') ||
               $user->hasRole('super-admin');
    }
>>>>>>> 9d96960 (.)
}
