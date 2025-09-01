<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\TeamResource\Pages;

use Modules\User\Filament\Resources\TeamResource;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;
>>>>>>> 8055579 (.)
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;
>>>>>>> 8d82f8c (.)

class CreateTeam extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
{
    // //
    protected static string $resource = TeamResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['team_id'] = auth()->id();

        return $data;
    }
}
