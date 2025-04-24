<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\DeviceResource\Pages;

<<<<<<< HEAD
use Modules\User\Filament\Resources\DeviceResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;

class CreateDevice extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
=======
use Filament\Resources\Pages\CreateRecord;
use Modules\User\Filament\Resources\DeviceResource;

class CreateDevice extends CreateRecord
>>>>>>> 67cd443 (.)
{
    protected static string $resource = DeviceResource::class;
}
