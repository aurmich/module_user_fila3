<?php

declare(strict_types=1);

namespace Modules\User\Filament\Pages\Tenancy;

use Filament\Forms\Components\TextInput;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Forms\Form;
>>>>>>> 8055579 (.)
=======
use Filament\Forms\Form;
>>>>>>> 8d82f8c (.)
use Filament\Pages\Tenancy\EditTenantProfile;

class EditTeamProfile extends EditTenantProfile
{
    public static function getLabel(): string
    {
        return 'Team profile';
    }

    public function getFormSchema(): array
<<<<<<< HEAD
<<<<<<< HEAD
    {

        return [

            TextInput::make('name'),
            // ...

        ];
    }
=======
=======
>>>>>>> 8d82f8c (.)
{
    
        
    return [
              
                    TextInput::make('name'),
                    // ...
                
      ];
}
<<<<<<< HEAD
>>>>>>> 8055579 (.)
=======
>>>>>>> 8d82f8c (.)
}
