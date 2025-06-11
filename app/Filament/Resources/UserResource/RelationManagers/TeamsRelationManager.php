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
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

class TeamsRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'teams';

    protected static ?string $recordTitleAttribute = 'name'; // Questo è per il titolo del record, non una label UI

    public function getFormSchema(): array
    {
        return [
            TextInput::make('role'),
        ];
    }


    public function getTableColumns(): array
    {
        return [
            TextColumn::make('name')
                ->searchable()
                ->sortable(),
            IconColumn::make('personal_team')
                ->boolean()
                ->getStateUsing(function (Model $record, $livewire): bool {
                    /** @var \Modules\User\Models\User $user */
                    $user = $livewire->getOwnerRecord();

                    return $user->current_team_id === $record->getKey();
                }),
            TextColumn::make('membership.role')
                ->searchable()
                ->sortable(),
            TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }

    public function getTableHeaderActions(): array
    {
        return [
            AttachAction::make()

                ->form(fn (AttachAction $action): array => [
                    $action->getRecordSelect(),
                    TextInput::make('role'),
                ]),
        ];
    }

    public function getTableActions(): array
    {
        return [
            EditAction::make(),
            DetachAction::make()
                ->after(function (Model $record, $livewire): void {
                    /** @var \Modules\User\Models\User $user */
                    $user = $livewire->getOwnerRecord();
                    if ($user->current_team_id === $record->getKey()) {
                        $user->update(['current_team_id' => null]);
                    }
                }),
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            DetachBulkAction::make()
                ->after(function (Collection $records, $livewire): void {
                    /** @var \Modules\User\Models\User $user */
                    $user = $livewire->getOwnerRecord();
                    if ($user->current_team_id) {
                        foreach ($records as $detachedTeam) {
                            if ($user->current_team_id === $detachedTeam->getKey()) {
                                $user->update(['current_team_id' => null]);
                                break;
                            }
                        }
                    }
                }),
        ];
    }
}
