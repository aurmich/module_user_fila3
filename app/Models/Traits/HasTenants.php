<?php

declare(strict_types=1);

namespace Modules\User\Models\Traits;

use Filament\Panel;
use Modules\Xot\Datas\XotData;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Contracts\TeamContract;
use Modules\Xot\Actions\Panel\ApplyTenancyToPanelAction;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

// use Modules\User\Models\OwnerRole;

/**
<<<<<<< HEAD
=======
 * Trait HasTenants
 * 
 * Provides tenant functionality for User models implementing multi-tenancy.
 * 
>>>>>>> aurmich/dev
 * @property TeamContract $currentTeam
 */
trait HasTenants
{
    /**
<<<<<<< HEAD
     * ..
     **/
    public function canAccessTenant(Model $tenant): bool
    {

        return $this->tenants()->whereKey($tenant)->exists();

    }

    public function getTenants(Panel $panel): array|Collection
    {
        return $this->tenants;
=======
     * Check if the user can access a specific tenant.
     *
     * @param \Illuminate\Database\Eloquent\Model $tenant
     * @return bool
     */
    public function canAccessTenant(Model $tenant): bool
    {
        return $this->tenants()->whereKey($tenant)->exists();
    }

    /**
     * Get tenants for the given panel.
     *
     * @param \Filament\Panel $panel
     * @return array<\Illuminate\Database\Eloquent\Model>|\Illuminate\Support\Collection<int, \Illuminate\Database\Eloquent\Model>
     */
    public function getTenants(Panel $panel): array|Collection
    {
        /** @var \Illuminate\Support\Collection<int, \Illuminate\Database\Eloquent\Model> $tenants */
        $tenants = $this->tenants;
        
        return $tenants;
>>>>>>> aurmich/dev
    }

    /**
     * Get all of the tenants the user belongs to.
     *
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<\Illuminate\Database\Eloquent\Model>
=======
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<\Illuminate\Database\Eloquent\Model, \Illuminate\Database\Eloquent\Relations\Pivot>
>>>>>>> aurmich/dev
     */
    public function tenants(): BelongsToMany
    {
        $xot = XotData::make();
<<<<<<< HEAD
        /** @var class-string<Model> */
=======
        /** @var class-string<\Illuminate\Database\Eloquent\Model> */
>>>>>>> aurmich/dev
        $tenant_class = $xot->getTenantClass();

        // $this->setConnection('mysql');
        //return $this->belongsToManyX($tenant_class, null, null, 'tenant_id');
        return $this->belongsToManyX($tenant_class);
        // ->as('membership')
    }
}
