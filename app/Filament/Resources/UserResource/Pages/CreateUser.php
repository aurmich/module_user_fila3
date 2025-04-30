<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Modules\User\Filament\Resources\UserResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;

use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;

class CreateUser extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
<<<<<<< HEAD
=======
=======
use Filament\Resources\Pages\CreateRecord;
use Modules\User\Filament\Resources\UserResource;

class CreateUser extends CreateRecord
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
{
    // //
    protected static string $resource = UserResource::class;
}
