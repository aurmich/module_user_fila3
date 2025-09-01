<?php

declare(strict_types=1);

namespace Modules\User\Filament\Pages\Tenancy;

use Filament\Forms\Components\TextInput;
<<<<<<< HEAD
=======
use Filament\Forms\Form;
>>>>>>> 8055579 (.)
use Filament\Pages\Tenancy\EditTenantProfile;

class EditTeamProfile extends EditTenantProfile
{
    public static function getLabel(): string
    {
        return 'Team profile';
    }

    public function getFormSchema(): array
<<<<<<< HEAD
    {

        return [

            TextInput::make('name'),
            // ...

        ];
    }
=======
{
    
        
    return [
              
                    TextInput::make('name'),
                    // ...
                
      ];
}
>>>>>>> 8055579 (.)
}
