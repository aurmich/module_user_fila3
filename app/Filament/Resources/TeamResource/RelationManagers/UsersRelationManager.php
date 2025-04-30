<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\TeamResource\RelationManagers;

use Filament\Forms\Form;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Modules\User\Filament\Resources\UserResource;
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;
<<<<<<< HEAD
use Filament\Tables;
=======
<<<<<<< HEAD
use Filament\Tables;
=======
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev

class UsersRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'users';

    protected static ?string $inverseRelationship = 'teams';

    protected static ?string $recordTitleAttribute = 'name';

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    /**
     * @return array<string, \Filament\Tables\Columns\Column>
     */
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
    public function getTableHeaderActions(): array
    {
        return [
            'attach' => Tables\Actions\AttachAction::make(),
        ];
    }
    
    /**
     * @return array<string, \Filament\Tables\Actions\Action|\Filament\Tables\Actions\ActionGroup>
     */
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
    public function getTableBulkActions(): array
    {
        return [
            'detach' => Tables\Actions\DetachBulkAction::make(),
            'delete' => Tables\Actions\DeleteBulkAction::make(),
        ];
<<<<<<< HEAD
=======
=======
    public function form(Form $form): Form
    {
        return UserResource::form($form);
        /*
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
            ]);
        */
    }

    public function table(Table $table): Table
    {
        $table = UserResource::table($table);
        $columns = $table->getColumns();
        $columns = collect($columns)->except(['teams.name', 'role.name', 'roles.name'])->all();
        $columns['role'] = TextColumn::make('role');
        $table->columns($columns);
        $headerActions = $table->getHeaderActions();
        // $headerActions['attach']=Tables\Actions\AttachAction::make();
        $table->headerActions($headerActions);

        return $table;
        /*
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
            ])
            ->filters([
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
                Tables\Actions\AttachAction::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DetachAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DetachBulkAction::make(),
                Tables\Actions\DeleteBulkAction::make(),
            ]);
        */
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    }
}
