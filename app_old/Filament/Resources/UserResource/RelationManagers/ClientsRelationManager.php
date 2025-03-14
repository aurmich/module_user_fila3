<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\RelationManagers;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;









class ClientsRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'clients';

    public function getFormSchema(): array
{
    
        
    return [
              
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                
      ];
}

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns(
                [
                    TextColumn::make('name'),
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
                    EditAction::make(),
                    DeleteAction::make(),
                ]
            )
            ->bulkActions(
                [
                    BulkActionGroup::make(
                        [
                            DeleteBulkAction::make(),
                        ]
                    ),
                ]
            )
            ->emptyStateActions(
                [
                    // {{ tableEmptyStateActions }}
                ]
            );
    }
}
