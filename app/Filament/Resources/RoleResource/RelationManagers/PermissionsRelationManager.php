<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\RoleResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

class PermissionsRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'permissions';

    /**
     * Configura lo schema del form per la gestione dei permessi.
     *
     * @return array<string, \Filament\Forms\Components\Component>
     */
    public function getFormSchema(): array
    {
        return [
            'name' => Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->placeholder((string) __('Inserisci il nome del permesso')),
        ];
    }

    /**
     * Configura la tabella per la visualizzazione e la gestione dei permessi.
     */
    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name')

                    ->sortable()
                    ->searchable(),
            ])
            ->filters([]) // Aggiungi eventuali filtri qui se necessario
            ->headerActions([
                Tables\Actions\CreateAction::make()

                    ->tooltip((string) __('Crea un nuovo permesso')),
            ])
            ->actions([
                Tables\Actions\EditAction::make()

                    ->tooltip((string) __('Modifica permesso')),
                Tables\Actions\DeleteAction::make()

                    ->tooltip((string) __('Elimina permesso')),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()

                    ->tooltip((string) __('Elimina i permessi selezionati')),
            ]);
    }
}
