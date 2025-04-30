<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\DeviceResource\Pages;

use Filament\Actions\DeleteAction;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Modules\User\Filament\Resources\DeviceResource;




use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;





class EditDevice extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
<<<<<<< HEAD
=======
=======
use Filament\Resources\Pages\EditRecord;
use Modules\User\Filament\Resources\DeviceResource;

class EditDevice extends EditRecord
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
{
    protected static string $resource = DeviceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
