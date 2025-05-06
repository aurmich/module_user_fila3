<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\PermissionResource\Pages;

<<<<<<< HEAD
use Filament\Actions;
use Modules\User\Filament\Resources\PermissionResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;

class EditPermission extends XotBaseEditRecord
{
    protected static string $resource = PermissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
=======
use Modules\User\Filament\Resources\PermissionResource;




use Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager;





class EditPermission extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
{
    // //
    protected static string $resource = PermissionResource::class;
>>>>>>> db74942 (.)
}
