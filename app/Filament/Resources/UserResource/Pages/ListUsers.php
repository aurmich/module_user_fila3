<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\Pages;

use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Query\Builder;
<<<<<<< HEAD
use Filament\Tables\Columns\TextColumn;
use Modules\Xot\Contracts\UserContract;
use Filament\Tables\Actions\ExportBulkAction;
use Modules\User\Filament\Resources\UserResource;
use Modules\User\Filament\Actions\ChangePasswordAction;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\User\Filament\Resources\UserResource\Pages\BaseListUsers;
use Modules\User\Filament\Resources\UserResource\Widgets\UserOverview;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
=======
use Modules\User\Filament\Actions\ChangePasswordAction;
use Modules\User\Filament\Resources\UserResource;
use Modules\User\Filament\Resources\UserResource\Widgets\UserOverview;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
>>>>>>> 5ed631f (.)

class ListUsers extends BaseListUsers
{
    protected static string $resource = UserResource::class;

    /**
     * @return array<string, TextColumn>
     */
    public function getTableColumns(): array
    {
        return [
<<<<<<< HEAD
            //'id' => TextColumn::make('id'),
=======
            'id' => TextColumn::make('id'),
            // 'uuid' => TextColumn::make('uuid'),
>>>>>>> 5ed631f (.)
            'name' => TextColumn::make('name')
                ->searchable(),
            'email' => TextColumn::make('email')
                ->searchable(),
            //'email_verified_at' => TextColumn::make('email_verified_at')
            //    ->dateTime(),
            //'created_at' => TextColumn::make('created_at')
            //    ->dateTime(),
        ];
    }

    /**
     * @return array<Tables\Filters\BaseFilter>
     */
    public function getTableFilters(): array
    {
        return [
            // Filter::make('verified')
            //    ->query(static fn (Builder $query): Builder => $query->whereNotNull('email_verified_at')),
            // Filter::make('unverified')
            //    ->query(static fn (Builder $query): Builder => $query->whereNull('email_verified_at')),
        ];
    }

    /**
     * @return array<Action|Tables\Actions\ActionGroup>
     */
    public function getTableActions(): array
    {
        return [
            ChangePasswordAction::make()
                ->tooltip('Cambio Password')
                ->iconButton(),
            ...parent::getTableActions(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            UserOverview::class,
        ];
    }

    /**
     * @return array<string, Tables\Actions\BulkAction>
     */
    public function getTableBulkActions(): array
    {
        return [
            'delete' => Tables\Actions\DeleteBulkAction::make(),
            'export' => ExportBulkAction::make(),
        ];
    }
}
