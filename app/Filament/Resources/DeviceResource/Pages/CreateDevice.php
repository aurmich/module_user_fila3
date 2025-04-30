<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\DeviceResource\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Modules\User\Filament\Resources\DeviceResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;

class CreateDevice extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
<<<<<<< HEAD
=======
=======
use Filament\Resources\Pages\CreateRecord;
use Modules\User\Filament\Resources\DeviceResource;

class CreateDevice extends CreateRecord
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
{
    protected static string $resource = DeviceResource::class;
}
