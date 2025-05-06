<?php

/**
 * @see https://github.com/Althinect/filament-spatie-roles-permissions/tree/2.x
 * @see https://github.com/phpsa/filament-authentication/blob/main/src/resources/PermissionResource.php
 */

declare(strict_types=1);

namespace Modules\User\Filament\Resources;

<<<<<<< HEAD
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Modules\User\Models\Permission;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\User\Filament\Resources\PermissionResource\Pages;

class PermissionResource extends XotBaseResource
{
    protected static ?string $model = Permission::class;

    protected static ?string $navigationIcon = 'heroicon-o-key';

    protected static ?string $navigationGroup = 'Admin';

    public static function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('guard_name')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('description')
                ->maxLength(255),
        ];
    }

    public static function getListTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('name')
                ->searchable(),
            Tables\Columns\TextColumn::make('guard_name')
                ->searchable(),
            Tables\Columns\TextColumn::make('description')
                ->searchable(),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
=======
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Modules\User\Filament\Resources\PermissionResource\Pages\CreatePermission;
use Modules\User\Filament\Resources\PermissionResource\Pages\EditPermission;
use Modules\User\Filament\Resources\PermissionResource\Pages\ListPermissions;
use Modules\User\Models\Permission;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager;

class PermissionResource extends XotBaseResource
{
    protected static ?string $navigationIcon = 'heroicon-o-lock-closed';

    protected static ?string $model = Permission::class;

    public static function getFormSchema(): array
    {
        return [
            'name' => TextInput::make('name')
                ->required()
                ->maxLength(255),
            'guard_name' => TextInput::make('guard_name')
                ->required()
                ->maxLength(255),
            'active' => Toggle::make('active')
                ->required(),
        ];
    }

    public static function getRelations(): array
    {
        return [];
>>>>>>> db74942 (.)
    }

    public static function getPages(): array
    {
        return [
<<<<<<< HEAD
            'index' => Pages\ListPermissions::route('/'),
            'create' => Pages\CreatePermission::route('/create'),
            'edit' => Pages\EditPermission::route('/{record}/edit'),
=======
            'index' => ListPermissions::route('/'),
            'create' => CreatePermission::route('/create'),
            'edit' => EditPermission::route('/{record}/edit'),
>>>>>>> db74942 (.)
        ];
    }
}
