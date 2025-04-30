<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\TeamResource\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Modules\User\Filament\Resources\TeamResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;

class CreateTeam extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
<<<<<<< HEAD
=======
=======
use Filament\Resources\Pages\CreateRecord;
use Modules\User\Filament\Resources\TeamResource;

class CreateTeam extends CreateRecord
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
{
    // //
    protected static string $resource = TeamResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['team_id'] = auth()->id();

        return $data;
    }
}
