<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\TeamResource\Pages;

use Filament\Actions\DeleteAction;
use Filament\Pages\Actions\ViewAction;
<<<<<<< HEAD
use Modules\User\Filament\Resources\TeamResource;




use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;





class EditTeam extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
=======
use Filament\Resources\Pages\EditRecord;
use Modules\User\Filament\Resources\TeamResource;

class EditTeam extends EditRecord
>>>>>>> 67cd443 (.)
{
    // //
    protected static string $resource = TeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
