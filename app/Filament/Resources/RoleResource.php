<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources;

use Filament\Forms\Components\TextInput;
<<<<<<< HEAD
use Filament\Forms\Components\Toggle;
use Modules\User\Filament\Resources\RoleResource\Pages\CreateRole;
use Modules\User\Filament\Resources\RoleResource\Pages\EditRole;
use Modules\User\Filament\Resources\RoleResource\Pages\ListRoles;
use Modules\User\Models\Role;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;

class RoleResource extends XotBaseResource
{
    protected static ?string $model = Role::class;
=======
use Filament\Resources\Pages\Page;
use Modules\User\Filament\Resources\RoleResource\Pages;
use Modules\User\Filament\Resources\RoleResource\RelationManagers;
use Modules\Xot\Filament\Resources\XotBaseResource;

class RoleResource extends XotBaseResource
{
    protected static ?string $navigationIcon = 'heroicon-o-shield-check';
>>>>>>> 67cd443 (.)

    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
            'name' => TextInput::make('name')
                ->required()
                ->maxLength(255),
            'guard_name' => TextInput::make('guard_name')
                ->required()
                ->maxLength(255),
            'enabled' => Toggle::make('enabled')
                ->required(),
=======
            TextInput::make('name')
                ->required()
                ->maxLength(255),
            TextInput::make('guard_name')
                ->default('web')
                ->required()
                ->maxLength(255),
            \Filament\Forms\Components\Select::make('permissions')
                ->multiple()
                ->relationship('permissions', 'name')
                ->preload(),
>>>>>>> 67cd443 (.)
        ];
    }

    public static function getRelations(): array
    {
<<<<<<< HEAD
        return [];
=======
        return [
            RelationManagers\UsersRelationManager::class,
            RelationManagers\PermissionsRelationManager::class,
        ];
>>>>>>> 67cd443 (.)
    }

    public static function getPages(): array
    {
        return [
<<<<<<< HEAD
            'index' => ListRoles::route('/'),
            'create' => CreateRole::route('/create'),
            'edit' => EditRole::route('/{record}/edit'),
        ];
    }
=======
            'index' => Pages\ListRoles::route('/'),
            'create' => Pages\CreateRole::route('/create'),
            'view' => Pages\ViewRole::route('/{record}'),
            'edit' => Pages\EditRole::route('/{record}/edit'),
            'permissions' => Pages\ManageRolePermissions::route('/{record}/permissions'),
        ];
    }

    public static function getRecordSubNavigation(Page $page): array
    {
        return $page->generateNavigationItems([
            Pages\ViewRole::class,
            Pages\EditRole::class,
            // Pages\EditCustomerContact::class,
            // Pages\ManageCustomerAddresses::class,
            Pages\ManageRolePermissions::class,
            // Pages\ManageCustomerPayments::class,
        ]);
    }
>>>>>>> 67cd443 (.)
}
