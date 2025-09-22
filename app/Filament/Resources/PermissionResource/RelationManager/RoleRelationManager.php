<?php

/**
 * @see https://github.com/Althinect/filament-spatie-roles-permissions/blob/2.x/src/resources/PermissionResource/RelationManager/RoleRelationManager.php
 */

declare(strict_types=1);

namespace Modules\User\Filament\Resources\PermissionResource\RelationManager;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

<<<<<<< HEAD
=======








>>>>>>> 079c9da7 (.)
class RoleRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'roles';

<<<<<<< HEAD
    protected static null|string $recordTitleAttribute = 'name';
=======
    protected static ?string $recordTitleAttribute = 'name';
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
            'name' => TextInput::make('name'),
            'guard_name' => TextInput::make('guard_name'),
        ];
    }

<<<<<<< HEAD
    #[\Override]
    public function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')->searchable(),
            TextColumn::make('guard_name')->searchable(),
        ])->filters([]);
    }

    protected static function getModelLabel(): null|string
=======
    public function table(Table $table): Table
    {
        return $table
            ->columns(
                [
                    TextColumn::make('name')
                        ->searchable(),
                    TextColumn::make('guard_name')
                        ->searchable(),
                ]
            )
            ->filters(
                [
                ]
            );
    }

    protected static function getModelLabel(): ?string
>>>>>>> 079c9da7 (.)
    {
        // return __('filament-spatie-roles-permissions::filament-spatie.section.role');
        return __('filament-spatie-roles-permissions::filament-spatie.section.role');
    }

    protected static function getPluralModelLabel(): string
    {
        return __('filament-spatie-roles-permissions::filament-spatie.section.roles');
    }
}
