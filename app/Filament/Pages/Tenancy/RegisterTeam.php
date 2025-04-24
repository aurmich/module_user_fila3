<?php

declare(strict_types=1);

namespace Modules\User\Filament\Pages\Tenancy;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\RegisterTenant;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Contracts\TeamContract;
use Modules\Xot\Datas\XotData;

class RegisterTeam extends RegisterTenant
{
    public static function getLabel(): string
    {
        return 'Register team';
    }

<<<<<<< HEAD
    public function getFormSchema(): array
{
    
        
    return [
              
                    TextInput::make('name'),
                    // ...
                
      ];
}
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

    /**
     * @param  array<string, mixed>  $data
     */
    protected function handleRegistration(array $data): Model
    {
        $teamClass = XotData::make()->getTeamClass();
        /** @var Model&TeamContract */
        $team = $teamClass::create($data);

        $team->members()->attach(auth()->user());

        return $team;
    }
}
