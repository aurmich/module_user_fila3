<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\RelationManagers;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

<<<<<<< HEAD
=======








>>>>>>> 079c9da7 (.)
class ProfileRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'profile';

<<<<<<< HEAD
    protected static null|string $recordTitleAttribute = 'first_name';
=======
    protected static ?string $recordTitleAttribute = 'first_name';
>>>>>>> 079c9da7 (.)

    /**
     * @return array<string, \Filament\Forms\Components\Component>
     */
<<<<<<< HEAD
    #[\Override]
=======
>>>>>>> 079c9da7 (.)
    public function getFormSchema(): array
    {
        return [
            'ente' => TextInput::make('ente'),
            'matr' => TextInput::make('matr'),
<<<<<<< HEAD
            'first_name' => TextInput::make('first_name')->required()->maxLength(255),
=======
            'first_name' => TextInput::make('first_name')
                ->required()
                ->maxLength(255),
>>>>>>> 079c9da7 (.)
            'last_name' => TextInput::make('last_name'),
        ];
    }

<<<<<<< HEAD
    #[\Override]
    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('ente'),
                TextColumn::make('matr'),
                TextColumn::make('first_name'),
                TextColumn::make('last_name'),
            ])
            ->filters([])
            ->headerActions([
                CreateAction::make(),
            ])
            ->actions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
=======
    public function table(Table $table): Table
    {
        return $table
            ->columns(
                [
                    TextColumn::make('id'),
                    TextColumn::make('ente'),
                    TextColumn::make('matr'),
                    TextColumn::make('first_name'),
                    TextColumn::make('last_name'),
                ]
            )
            ->filters(
                [
                ]
            )
            ->headerActions(
                [
                    CreateAction::make(),
                ]
            )
            ->actions(
                [
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ]
            )
            ->bulkActions(
                [
                    DeleteBulkAction::make(),
                ]
            );
>>>>>>> 079c9da7 (.)
    }
}
