<?php

/**
 * --.
 */
declare(strict_types=1);

namespace Modules\User\Filament\Resources\TenantResource\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Illuminate\Database\Eloquent\Model;
use Modules\User\Filament\Resources\TenantResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;

class CreateTenant extends XotBaseCreateRecord
<<<<<<< HEAD
=======
=======
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Filament\Resources\TenantResource;

class CreateTenant extends CreateRecord
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
{
    protected static string $resource = TenantResource::class;

    /**
     * @throws \Throwable
     */
    protected function handleRecordCreation(array $data): Model
    {
        return parent::handleRecordCreation(collect($data)->except('domain')->toArray());
    }

    // :30    Method Modules\User\Filament\Resources\TenantResource\Pages\CreateTenant::createTenantRecord() is unused.
    //      ✏️  User\Filament\Resources\TenantResource\Pages\CreateTenant.php
    // /**
    //  * @throws \Throwable
    //  */
    // private function createTenantRecord(array $data)
    // {
    //     \Log::info('Saving Tenant');
    //     $record = new Tenant(collect($data)->except('domain')->toArray());
    //     $record->saveOrFail();
    //     \Log::info('Saving Domains');
<<<<<<< HEAD
    //     $record = $record::find($record->);
=======
<<<<<<< HEAD
    //     $record = $record::find($record->);
=======
    //     $record = $record::find($record->id);
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    //     $record->domains()->create(['domain' => collect($data)->get('domain')]);

    //     return $record;
    // }
}
