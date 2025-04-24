<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\RelationManagers;

<<<<<<< HEAD
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Actions\AttachAction;
use Filament\Tables\Actions\DetachAction;
use Filament\Tables\Actions\DetachBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class TeamsRelationManager extends RelationManager
{
    protected static string $relationship = 'teams';

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                IconColumn::make('personal_team')
                    ->label('Personal Team')
                    ->boolean()
                    ->default(fn ($record, $livewire) => $livewire->getOwnerRecord()->current_team_id === $record->id),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                AttachAction::make()
                    ->form(fn (AttachAction $action): array => [
                        $action->getRecordSelect(),
                        TextInput::make('role')
                            ->default('editor')
                            ->required(),
                    ]),
            ])
            ->actions([
                DetachAction::make()
                    ->after(function ($record, $livewire): void {
                        $user = $livewire->getOwnerRecord();
                        $team_id = $record->getKey();
                        $user->update([
                            'current_team_id' => null,
                        ]);
                    }),
            ])
            ->bulkActions([
                DetachBulkAction::make(),
            ]);
    }
=======
use Filament\Forms\Form;
use Filament\Tables\Actions;
use Filament\Tables\Actions\AttachAction;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Modules\User\Filament\Resources\TeamResource;
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\HasXotTable;

class TeamsRelationManager extends XotBaseRelationManager
{
    use HasXotTable;

    protected static string $relationship = 'teams';

    protected static ?string $recordTitleAttribute = 'name';

    public function form(Form $form): Form
    {
        return TeamResource::form($form);
    }

    public function getColumns(Table $table): array
    {
        $actions = [
            IconColumn::make('is_current_team')
                ->default(fn ($record, $livewire) => $livewire->getOwnerRecord()->current_team_id === $record->id)
                ->boolean(),
        ];

        return array_merge($table->getColumns(), $actions);
    }

    public function getFilters(Table $table): array
    {
        return $table->getFilters();
    }

    /*
    public function getHeaderActions(Table $table): array
    {
        $actions = [
            AttachAction::make(),
        ];

        return array_merge($actions, $table->getHeaderActions());
    }

    public function getActions(Table $table): array
    {
        $actions = [
            Actions\DetachAction::make()
                ->label('')
                ->tooltip(__('filament-actions::detach.single.label')),
            Actions\Action::make('make_current')
                ->label('')
                ->tooltip('set current')
                ->icon('heroicon-o-user-plus')
                ->action(function ($record, $livewire) {
                    $user = $livewire->getOwnerRecord();
                    $team_id = $record->getKey();
                    $user->update([
                        'current_team_id' => $team_id,
                    ]);
                }),
        ];

        return array_merge($actions, $table->getActions());
    }
        */
    /*
    public function table(Table $table): Table
    {
        $table = TeamResource::table($table);

        return $table
            ->columns($this->getColumns($table))
            ->filters($this->getFilters($table))
            ->headerActions($this->getHeaderActions($table))
            ->actions($this->getActions($table))
            // ->bulkActions($this->getTableBulkActions())
            ->filtersLayout(FiltersLayout::AboveContent)
            ->actionsPosition(ActionsPosition::BeforeColumns)
            ->emptyStateActions(
                [
                    CreateAction::make(),
                ]
            );
        // ->defaultSort('users.created_at', 'desc');
    }
        */
>>>>>>> 67cd443 (.)
}
