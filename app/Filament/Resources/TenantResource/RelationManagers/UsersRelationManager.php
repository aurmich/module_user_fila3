<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\TenantResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables\Columns\TextColumn;
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\HasXotTable;

class UsersRelationManager extends XotBaseRelationManager
{
    use HasXotTable;

    protected static string $relationship = 'users';

    protected static ?string $recordTitleAttribute = 'name';

<<<<<<< HEAD
=======
    public function form(Form $form): Form
    {
        return $form->schema($this->getFormSchema());
    }

>>>>>>> 67cd443 (.)
    /**
     * @return array<Forms\Components\Component>
     */
    public function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('name')
<<<<<<< HEAD
=======

>>>>>>> 67cd443 (.)
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('email')
<<<<<<< HEAD
=======

>>>>>>> 67cd443 (.)
                ->email()
                ->required()
                ->unique(ignoreRecord: true)
                ->maxLength(255),

            Forms\Components\DateTimePicker::make('email_verified_at')
<<<<<<< HEAD
                ->nullable(),

            Forms\Components\TextInput::make('password')
=======

                ->nullable(),

            Forms\Components\TextInput::make('password')

>>>>>>> 67cd443 (.)
                ->password()
                ->required(fn ($context) => $context === 'create')
                ->minLength(8)
                ->same('password_confirmation')
                ->dehydrated(fn ($state) => filled($state))
                ->dehydrateStateUsing(fn ($state) => bcrypt($state)),

            Forms\Components\TextInput::make('password_confirmation')
<<<<<<< HEAD
=======

>>>>>>> 67cd443 (.)
                ->password()
                ->required(fn ($context) => $context === 'create')
                ->minLength(8),
        ];
    }

<<<<<<< HEAD
    /**
     * @return array<string, \Filament\Tables\Columns\Column>
     */
    public function getListTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->sortable()
                ->toggleable(),

            'name' => TextColumn::make('name')
=======
    public function getListTableColumns(): array
    {
        return [
            TextColumn::make('id')

                ->sortable()
                ->toggleable(),

            TextColumn::make('name')

>>>>>>> 67cd443 (.)
                ->searchable()
                ->sortable()
                ->toggleable(),

<<<<<<< HEAD
            'email' => TextColumn::make('email')
=======
            TextColumn::make('email')

>>>>>>> 67cd443 (.)
                ->searchable()
                ->sortable()
                ->toggleable(),

<<<<<<< HEAD
            'email_verified_at' => TextColumn::make('email_verified_at')
=======
            TextColumn::make('email_verified_at')

>>>>>>> 67cd443 (.)
                ->dateTime()
                ->sortable()
                ->toggleable(),

<<<<<<< HEAD
            'created_at' => TextColumn::make('created_at')
=======
            TextColumn::make('created_at')

>>>>>>> 67cd443 (.)
                ->dateTime()
                ->sortable()
                ->toggleable(),

<<<<<<< HEAD
            'updated_at' => TextColumn::make('updated_at')
=======
            TextColumn::make('updated_at')

>>>>>>> 67cd443 (.)
                ->dateTime()
                ->sortable()
                ->toggleable(),
        ];
    }
}
