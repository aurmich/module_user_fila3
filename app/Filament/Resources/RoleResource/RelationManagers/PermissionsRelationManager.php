<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\RoleResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
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
class PermissionsRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'permissions';

    /**
     * Configura lo schema del form per la gestione dei permessi.
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
     *
     * @return array<string, \Filament\Forms\Components\Component>
     */
    public function getFormSchema(): array
    {
        return [
            'name' => Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->placeholder(__('Inserisci il nome del permesso')),
        ];
<<<<<<< HEAD
=======
=======
     */
    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255)

                ->placeholder(__('Inserisci il nome del permesso')),
        ]);
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
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

                    ->tooltip(__('Crea un nuovo permesso')),
            ])
            ->actions([
                Tables\Actions\EditAction::make()

                    ->tooltip(__('Modifica permesso')),
                Tables\Actions\DeleteAction::make()

                    ->tooltip(__('Elimina permesso')),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()

                    ->tooltip(__('Elimina i permessi selezionati')),
            ]);
    }
}
