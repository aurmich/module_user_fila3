<?php

declare(strict_types=1);

namespace Modules\User\Models\Traits;

use Filament\Panel;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Collection;
use Modules\User\Contracts\TeamContract;
=======
>>>>>>> 8d82f8c (.)
use Modules\Xot\Datas\XotData;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Contracts\TeamContract;
use Modules\Xot\Actions\Panel\ApplyTenancyToPanelAction;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Trait HasTenants
 * 
 * Provides tenant functionality for User models implementing multi-tenancy.
<<<<<<< HEAD
 *
=======
use Modules\Xot\Datas\XotData;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Contracts\TeamContract;
use Modules\Xot\Actions\Panel\ApplyTenancyToPanelAction;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Trait HasTenants
 * 
 * Provides tenant functionality for User models implementing multi-tenancy.
 * 
>>>>>>> 8055579 (.)
=======
 * 
>>>>>>> 8d82f8c (.)
 * @property TeamContract $currentTeam
 */
trait HasTenants
{
    /**
     * Check if the user can access a specific tenant.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @param \Illuminate\Database\Eloquent\Model $tenant
     * @return bool
>>>>>>> 8055579 (.)
=======
     *
     * @param \Illuminate\Database\Eloquent\Model $tenant
     * @return bool
>>>>>>> 8d82f8c (.)
     */
    public function canAccessTenant(Model $tenant): bool
    {
        return $this->tenants()->whereKey($tenant)->exists();
    }

    /**
     * Get tenants for the given panel.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * @param \Filament\Panel $panel
>>>>>>> 8055579 (.)
=======
     * @param \Filament\Panel $panel
>>>>>>> 8d82f8c (.)
     * @return array<\Illuminate\Database\Eloquent\Model>|\Illuminate\Support\Collection<int, \Illuminate\Database\Eloquent\Model>
     */
    public function getTenants(Panel $panel): array|Collection
    {
        /** @var \Illuminate\Support\Collection<int, \Illuminate\Database\Eloquent\Model> $tenants */
        $tenants = $this->tenants;
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8055579 (.)
=======
        
>>>>>>> 8d82f8c (.)
        return $tenants;
    }

    /**
     * Get all of the tenants the user belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<\Illuminate\Database\Eloquent\Model, \Illuminate\Database\Eloquent\Relations\Pivot>
     */
    public function tenants(): BelongsToMany
    {
        $xot = XotData::make();
        /** @var class-string<\Illuminate\Database\Eloquent\Model> */
        $tenant_class = $xot->getTenantClass();

        return $this->belongsToManyX($tenant_class);
    }
}
