<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Database\Eloquent\Model;




<<<<<<< HEAD
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager;
=======
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;
>>>>>>> 40b5428 (Merge remote-tracking branch 'origin/dev' into dev)





class UserOverview extends Widget
{
    public ?Model $record = null;

    protected static string $view = 'user::filament.resources.user-resource.widgets.user-overview';
}
