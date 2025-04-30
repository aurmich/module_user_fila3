<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\FeatureResource\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Modules\User\Filament\Resources\FeatureResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;

class CreateFeature extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
<<<<<<< HEAD
=======
=======
use Filament\Resources\Pages\CreateRecord;
use Modules\User\Filament\Resources\FeatureResource;

class CreateFeature extends CreateRecord
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
{
    protected static string $resource = FeatureResource::class;
}
