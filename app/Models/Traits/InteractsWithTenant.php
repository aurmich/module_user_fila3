<?php

declare(strict_types=1);

namespace Modules\User\Models\Traits;

use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\User\Contracts\TeamContract;
use Modules\User\Models\Scopes\TenantScope;
use Modules\User\Models\Tenant;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Xot\Datas\XotData;
>>>>>>> 8055579 (.)
=======
use Modules\Xot\Datas\XotData;
>>>>>>> 8d82f8c (.)

/**
 * @property TeamContract $currentTeam
 */
trait InteractsWithTenant
{
    /**
     * Tenant corrente.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @var Model|null
>>>>>>> 8055579 (.)
=======
     *
     * @var Model|null
>>>>>>> 8d82f8c (.)
     */
    protected ?Model $currentTenant = null;

    /**
     * Relazione con il tenant a cui appartiene il modello.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\Illuminate\Database\Eloquent\Model, self>
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
>>>>>>> 8055579 (.)
=======
>>>>>>> 8d82f8c (.)
     * @phpstan-return \Illuminate\Database\Eloquent\Relations\BelongsTo<\Illuminate\Database\Eloquent\Model, $this>
     */
    public function tenant(): BelongsTo
    {
        $tenant = $this->getTenant();
        if ($tenant === null) {
            $this->loadTenantFromSession();
            $tenant = $this->getTenant();
        }

        $tenantClass = config('tenant.tenant_model', Tenant::class);

        // @phpstan-ignore argument.type, argument.templateType
        return $this->belongsTo($tenantClass, 'tenant_id');
    }

    /**
     * Ottiene il tenant corrente.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return Model|null
>>>>>>> 8055579 (.)
=======
     *
     * @return Model|null
>>>>>>> 8d82f8c (.)
     */
    protected function getTenant(): ?Model
    {
        return $this->currentTenant;
    }

    /**
     * Carica il tenant dalla sessione.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 8055579 (.)
=======
     *
     * @return void
>>>>>>> 8d82f8c (.)
     */
    protected function loadTenantFromSession(): void
    {
        try {
            $this->currentTenant = Filament::getTenant();
        } catch (\Throwable $e) {
            // Se Filament non è disponibile, lascia il tenant come null
            $this->currentTenant = null;
        }
    }

    /**
     * The "booted" method of the model.
     */
    protected static function bootInteractsWithTenant(): void
    {
        static::addGlobalScope(new TenantScope);

        static::creating(
            static function ($model): void {
                if ($model !== null) {
                    $tenant = Filament::getTenant();
                    if ($tenant !== null) {
                        $model->tenant_id = $tenant->getKey();
                    }
                }
            }
        );
    }

    /**
     * Interact with the user's first name.
     */
    protected function setTenantIdAttribute(?int $value): void
    {
        $tenant = Filament::getTenant();
        if ($value === null && $tenant !== null) {
            $tenantId = $tenant->getKey();
            if (is_int($tenantId)) {
                $value = $tenantId;
            }
        }

        if ($value !== null) {
            $this->attributes['tenant_id'] = $value;
        }
    }

    /**
     * Applica lo scope del tenant.
     */
    protected function applyTenantScope(): void
    {
        $tenant = $this->getTenant();
        if ($tenant === null) {
            $this->loadTenantFromSession();
            $tenant = $this->getTenant();
        }

        if ($tenant !== null) {
            $tenantId = $tenant->getKey();
            if ($tenantId !== null) {
<<<<<<< HEAD
<<<<<<< HEAD
                static::addGlobalScope(new TenantScope);
=======
                static::addGlobalScope(new TenantScope());
>>>>>>> 8055579 (.)
=======
                static::addGlobalScope(new TenantScope());
>>>>>>> 8d82f8c (.)
            }
        }
    }
}
