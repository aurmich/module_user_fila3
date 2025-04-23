<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources;

use Modules\User\Models\Profile;




<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager;
=======
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;
>>>>>>> 40b5428 (Merge remote-tracking branch 'origin/dev' into dev)
=======
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager;
>>>>>>> 890be7f (fix: auto resolve conflict)





class ProfileResource extends BaseProfileResource
{
    protected static ?string $model = Profile::class;
}
