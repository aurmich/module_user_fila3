<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\SocialProviderResource\Pages;

use Filament\Actions;
<<<<<<< HEAD
use Modules\User\Filament\Resources\SocialProviderResource;




use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;





class EditSocialProvider extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
=======
use Filament\Resources\Pages\EditRecord;
use Modules\User\Filament\Resources\SocialProviderResource;

class EditSocialProvider extends EditRecord
>>>>>>> 67cd443 (.)
{
    protected static string $resource = SocialProviderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
