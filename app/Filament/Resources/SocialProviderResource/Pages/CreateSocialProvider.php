<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\SocialProviderResource\Pages;

<<<<<<< HEAD
use Modules\User\Filament\Resources\SocialProviderResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;



class CreateSocialProvider extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
=======
use Filament\Resources\Pages\CreateRecord;
use Modules\User\Filament\Resources\SocialProviderResource;

class CreateSocialProvider extends CreateRecord
>>>>>>> 67cd443 (.)
{
    protected static string $resource = SocialProviderResource::class;
}
