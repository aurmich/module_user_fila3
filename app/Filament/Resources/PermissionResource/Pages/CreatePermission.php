<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\PermissionResource\Pages;

<<<<<<< HEAD
use Modules\User\Filament\Resources\PermissionResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;

class CreatePermission extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
=======
use Filament\Resources\Pages\CreateRecord;
use Modules\User\Filament\Resources\PermissionResource;

class CreatePermission extends CreateRecord
>>>>>>> 67cd443 (.)
{
    // //
    protected static string $resource = PermissionResource::class;
}
