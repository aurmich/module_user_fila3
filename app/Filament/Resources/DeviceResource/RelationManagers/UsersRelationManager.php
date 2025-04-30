<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\DeviceResource\RelationManagers;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Modules\User\Filament\Resources\UserResource;
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev








<<<<<<< HEAD
=======
=======
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
class UsersRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'users';

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    /**
     * @return array<string, \Filament\Forms\Components\Component>
     */
    public function getFormSchema(): array
    {
        return [
            'device' => TextInput::make('device')
                ->required()
                ->maxLength(255),
        ];
<<<<<<< HEAD
=======
=======
    public function form(Form $form): Form
    {
        return $form
            ->schema(
                [
                    TextInput::make('device')
                        ->required()
                        ->maxLength(255),
                ]
            );
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    }

    public function table(Table $table): Table
    {
        $table = UserResource::table($table);

        return $table;
    }
}
