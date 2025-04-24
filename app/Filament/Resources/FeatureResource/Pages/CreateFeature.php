<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\FeatureResource\Pages;

<<<<<<< HEAD
use Modules\User\Filament\Resources\FeatureResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;

class CreateFeature extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
=======
use Filament\Resources\Pages\CreateRecord;
use Modules\User\Filament\Resources\FeatureResource;

class CreateFeature extends CreateRecord
>>>>>>> 67cd443 (.)
{
    protected static string $resource = FeatureResource::class;
}
