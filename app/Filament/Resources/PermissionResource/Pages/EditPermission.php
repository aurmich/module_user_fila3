<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\PermissionResource\Pages;

<<<<<<< HEAD
use Modules\User\Filament\Resources\PermissionResource;




use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;





class EditPermission extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
=======
use Filament\Resources\Pages\EditRecord;
use Modules\User\Filament\Resources\PermissionResource;

class EditPermission extends EditRecord
>>>>>>> 67cd443 (.)
{
    // //
    protected static string $resource = PermissionResource::class;
}
