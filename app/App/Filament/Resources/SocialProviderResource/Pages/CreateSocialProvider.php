<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\SocialProviderResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\User\Filament\Resources\SocialProviderResource;

<<<<<<< HEAD
class CreateSocialProvider extends CreateRecord
=======
class CreateSocialProvider extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
>>>>>>> 96f269357d1a785a36860a85f377f9e5c58e50b8
{
    protected static string $resource = SocialProviderResource::class;
}
