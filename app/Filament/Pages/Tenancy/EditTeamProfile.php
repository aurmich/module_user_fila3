<?php

declare(strict_types=1);

namespace Modules\User\Filament\Pages\Tenancy;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\EditTenantProfile;

class EditTeamProfile extends EditTenantProfile
{
    public static function getLabel(): string
    {
        return 'Team profile';
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    public function getFormSchema(): array
{
    
        
    return [
              
                    TextInput::make('name'),
                    // ...
                
      ];
}
<<<<<<< HEAD
=======
=======
    public function form(Form $form): Form
    {
        return $form
            ->schema(
                [
                    TextInput::make('name'),
                    // ...
                ]
            );
    }
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
}
