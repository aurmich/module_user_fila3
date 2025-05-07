<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources;

use Modules\User\Models\Profile;




<<<<<<< HEAD
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager;
=======
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;
>>>>>>> 867b3bd (.)





class ProfileResource extends BaseProfileResource
{
    protected static ?string $model = Profile::class;
}
