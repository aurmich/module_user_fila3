<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\BaseProfileResource\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Modules\User\Filament\Resources\BaseProfileResource;




use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;





class EditProfile extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
{
    protected static string $resource = BaseProfileResource::class;
<<<<<<< HEAD
=======
=======
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\User\Filament\Resources\BaseProfileResource;

class EditProfile extends EditRecord
{
    protected static string $resource = BaseProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
}
