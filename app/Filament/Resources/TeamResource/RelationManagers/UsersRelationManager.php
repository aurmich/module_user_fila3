<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\TeamResource\RelationManagers;

use Filament\Forms\Form;
<<<<<<< HEAD
use Filament\Tables;
=======
>>>>>>> 079c9da7 (.)
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Modules\User\Filament\Resources\UserResource;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
<<<<<<< HEAD
=======
use Filament\Tables;
>>>>>>> 079c9da7 (.)

class UsersRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'users';

<<<<<<< HEAD
    protected static null|string $inverseRelationship = 'teams';

    protected static null|string $recordTitleAttribute = 'name';
=======
    protected static ?string $inverseRelationship = 'teams';

    protected static ?string $recordTitleAttribute = 'name';
>>>>>>> 079c9da7 (.)

    /**
     * @return array<string, \Filament\Tables\Columns\Column>
     */
<<<<<<< HEAD
    #[\Override]
=======
>>>>>>> 079c9da7 (.)
    public function getTableColumns(): array
    {
        return [
            'name' => TextColumn::make('name'),
            'email' => TextColumn::make('email'),
            'role' => TextColumn::make('role'),
        ];
    }

    /**
     * @return array<string, \Filament\Tables\Actions\Action>
     */
<<<<<<< HEAD
    #[\Override]
=======
>>>>>>> 079c9da7 (.)
    public function getTableHeaderActions(): array
    {
        return [
            'attach' => Tables\Actions\AttachAction::make(),
        ];
    }

    /**
     * @return array<string, \Filament\Tables\Actions\Action|\Filament\Tables\Actions\ActionGroup>
     */
<<<<<<< HEAD
    #[\Override]
=======
>>>>>>> 079c9da7 (.)
    public function getTableActions(): array
    {
        return [
            'view' => Tables\Actions\ViewAction::make(),
            'edit' => Tables\Actions\EditAction::make(),
            'detach' => Tables\Actions\DetachAction::make(),
            'delete' => Tables\Actions\DeleteAction::make(),
        ];
    }

    /**
     * @return array<string, \Filament\Tables\Actions\BulkAction>
     */
<<<<<<< HEAD
    #[\Override]
=======
>>>>>>> 079c9da7 (.)
    public function getTableBulkActions(): array
    {
        return [
            'detach' => Tables\Actions\DetachBulkAction::make(),
            'delete' => Tables\Actions\DeleteBulkAction::make(),
        ];
    }
}
