# Filament Relation Managers nel Modulo User

Questa pagina fornisce indicazioni specifiche per l'implementazione dei `RelationManager` all'interno del modulo User, integrando le linee guida generali fornite dal modulo Xot.

## Estensione e Configurazione di Base

Tutti i `RelationManager` nel modulo User **devono** estendere `Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager`.

### Regola Fondamentale: Traduzioni Esplicite

**MAI** utilizzare metodi diretti come `->label()`, `->placeholder()`, `->helperText()`, `->modalHeading()` ecc. per impostare stringhe visibili all'utente.
Tutte queste stringhe **DEVONO** provenire dai file di traduzione del modulo (es. `lang/it/teams.php`) utilizzando la funzione helper `__()`.

Esempio: `->label(__('user::teams.fields.name.label'))`

Per le linee guida complete sulla configurazione di base, la definizione dello schema del form (`getFormSchema()`), la gestione delle colonne, le azioni, i filtri, fare riferimento alla documentazione centrale:
-   **[Linee Guida per RelationManager e Tabelle Personalizzate Xot in Filament](../../Xot/docs/filament_relationmanager_e_tabelle_xot.md)**

## Esempio Aggiornato: `TeamsRelationManager`

Il `TeamsRelationManager` gestisce la relazione molti-a-molti tra `User` e `Team`, includendo un campo `role` nella tabella pivot.

Ecco un estratto che evidenzia la struttura aggiornata, con l'uso esplicito delle traduzioni:

```php
<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\RelationManagers;

use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\AttachAction;
use Filament\Tables\Actions\DetachAction;
use Filament\Tables\Actions\DetachBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

class TeamsRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'teams';
    protected static ?string $recordTitleAttribute = 'name';

    public function getFormSchema(): array
    {
        return [
            TextInput::make('role')
                ->label(__('user::teams.fields.role.label'))
                ->placeholder(__('user::teams.fields.role.placeholder'))
                ->helperText(__('user::teams.fields.role.help'))
                ->required(),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns($this->getTableColumns())
            ->headerActions($this->getTableHeaderActions())
            ->actions($this->getTableActions())
            ->bulkActions($this->getTableBulkActions());
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('name')
                ->label(__('user::teams.fields.name.label'))
                ->searchable()->sortable(),
            IconColumn::make('personal_team')
                ->label(__('user::teams.fields.personal_team.label'))
                ->boolean()
                ->getStateUsing(function (Model $record, $livewire): bool {
                    $user = $livewire->getOwnerRecord();
                    return $user->current_team_id === $record->getKey();
                }),
            TextColumn::make('membership.role')
                ->label(__('user::teams.fields.role.label'))
                ->searchable()->sortable(),
            TextColumn::make('created_at')
                ->label(__('user::teams.fields.created_at.label'))
                ->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('updated_at')
                ->label(__('user::teams.fields.updated_at.label'))
                ->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
        ];
    }

    protected function getTableHeaderActions(): array
    {
        return [
            AttachAction::make()
                ->label(__('user::teams.actions.attach.label'))
                ->modalHeading(__('user::teams.actions.attach.modal.heading'))
                ->form(fn (AttachAction $action): array => [
                    $action->getRecordSelect(),
                    TextInput::make('role')
                        ->label(__('user::teams.actions.attach.form.role.label'))
                        ->helperText(__('user::teams.actions.attach.form.role.default_help_text'))
                        ->required(),
                ]),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            EditAction::make()
                ->label(__('user::teams.actions.edit.label'))
                ->modalHeading(__('user::teams.actions.edit.modal.heading')),
            DetachAction::make()
                ->label(__('user::teams.actions.detach.label'))
                ->modalHeading(__('user::teams.actions.detach.modal.heading'))
                // ... (logica after)
        ];
    }

    protected function getTableBulkActions(): array
    {
        return [
            DetachBulkAction::make()
                ->label(__('user::teams.actions.bulk_detach.label'))
                ->modalHeading(__('user::teams.actions.bulk_detach.modal.heading'))
                // ... (logica after)
        ];
    }
}
```

### Punti Chiave Corretti per `TeamsRelationManager` (e simili):

1.  **Traduzioni Esplicite Obbligatorie**: Tutte le stringhe UI (label, placeholder, helper text, modal heading, ecc.) devono essere caricate tramite `__('module::file.key.subkey')`.
2.  **Definizione Schema Form Pivot**: Implementare `public function getFormSchema(): array`.
3.  **`AttachAction` Form**: Definire il form completo (record select + campi pivot) direttamente nell'azione.
4.  **Aderenza a `XotBaseRelationManager`**: Seguire le indicazioni della [documentazione Xot](../../Xot/docs/filament_relationmanager_e_tabelle_xot.md).

## Riferimenti Aggiuntivi
(Come prima)
