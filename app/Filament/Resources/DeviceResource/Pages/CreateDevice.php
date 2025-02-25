<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\DeviceResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\User\Filament\Resources\DeviceResource;

class CreateDevice extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
{
    protected static string $resource = DeviceResource::class;
}
