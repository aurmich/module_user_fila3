<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 8d82f8c (.)



use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;





<<<<<<< HEAD
>>>>>>> 8055579 (.)
=======
>>>>>>> 8d82f8c (.)
class UserOverview extends Widget
{
    public ?Model $record = null;

    protected static string $view = 'user::filament.resources.user-resource.widgets.user-overview';
}
