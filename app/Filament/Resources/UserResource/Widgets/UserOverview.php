<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

class UserOverview extends Widget
{
    public null|Model $record = null;
=======




use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;





class UserOverview extends Widget
{
    public ?Model $record = null;
>>>>>>> 079c9da7 (.)

    protected static string $view = 'user::filament.resources.user-resource.widgets.user-overview';
}
