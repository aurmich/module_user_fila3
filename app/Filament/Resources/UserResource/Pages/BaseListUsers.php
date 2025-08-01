<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\Pages;

use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Query\Builder;
use Modules\User\Filament\Actions\ChangePasswordAction;
use Modules\User\Filament\Resources\UserResource;
use Modules\User\Filament\Resources\UserResource\Widgets\UserOverview;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

abstract class BaseListUsers extends XotBaseListRecords
{
    protected static string $resource = UserResource::class;

    /**
<<<<<<< HEAD
     * Get table columns for user records.
     *
     * @return array<string, \Filament\Tables\Columns\Column>
=======
     * @return array<string, TextColumn>
>>>>>>> d46f92c (.)
     */
    public function getTableColumns(): array
    {
        return [
<<<<<<< HEAD
=======
            //'id' => TextColumn::make('id'),
>>>>>>> d46f92c (.)
            'name' => TextColumn::make('name')
                ->searchable(),
            'email' => TextColumn::make('email')
                ->searchable(),
<<<<<<< HEAD
=======
            //'email_verified_at' => TextColumn::make('email_verified_at')
            //    ->dateTime(),
            //'created_at' => TextColumn::make('created_at')
            //    ->dateTime(),
>>>>>>> d46f92c (.)
        ];
    }

    /**
<<<<<<< HEAD
     * Get table filters for user records.
     *
=======
>>>>>>> d46f92c (.)
     * @return array<Tables\Filters\BaseFilter>
     */
    public function getTableFilters(): array
    {
        return [
<<<<<<< HEAD
            // Filtri disabilitati per ora, abilitare se necessario
            /*
=======
>>>>>>> d46f92c (.)
            Filter::make('verified')
                ->query(static fn (Builder $query): Builder => $query->whereNotNull('email_verified_at')),
            Filter::make('unverified')
                ->query(static fn (Builder $query): Builder => $query->whereNull('email_verified_at')),
<<<<<<< HEAD
            */
=======
>>>>>>> d46f92c (.)
        ];
    }

    /**
<<<<<<< HEAD
     * Get table actions for user records.
     *
     * @return array<string, \Filament\Tables\Actions\Action|\Filament\Tables\Actions\ActionGroup>
     * @phpstan-ignore-next-line
     */
    /** @phpstan-ignore-next-line */
    public function getTableActions(): array
    {
        $actions = [
            'change_password' => ChangePasswordAction::make()
                ->tooltip('Cambio Password')
                ->iconButton(),
        ];
        
        // Add parent actions - merge arrays
        $parentActions = parent::getTableActions();
        $actions = array_merge($actions, $parentActions);
        
        /*
        // Add deactivate action
        $actions['deactivate'] = Action::make('deactivate')
            ->tooltip(__('filament-actions::delete.single.label'))
            ->color('danger')
            ->icon('heroicon-o-trash')
            ->action(static fn (UserContract $user) => $user->delete());
        */   
        /** @phpstan-ignore-next-line */
        return $actions;
    }

    /**
     * Get header widgets for the user list page.
     *
     * @return array<class-string>
     */
    protected function getHeaderWidgets(): array
    {
        return [
            //UserOverview::class
=======
     * @return array<Action|Tables\Actions\ActionGroup>
     */
    public function getTableActions(): array
    {
        return [
            ChangePasswordAction::make()
                ->tooltip('Cambio Password')
                ->iconButton(),
            ...parent::getTableActions(),
            Action::make('deactivate')
                ->tooltip(__('filament-actions::delete.single.label'))
                ->color('danger')
                ->icon('heroicon-o-trash')
                ->action(static fn (UserContract $user) => $user->delete()),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            UserOverview::class,
>>>>>>> d46f92c (.)
        ];
    }

    /**
<<<<<<< HEAD
     * Get table bulk actions for user records.
     *
     * @return array<\Filament\Tables\Actions\BulkAction>
=======
     * @return array<string, Tables\Actions\BulkAction>
>>>>>>> d46f92c (.)
     */
    public function getTableBulkActions(): array
    {
        return [
<<<<<<< HEAD
            Tables\Actions\DeleteBulkAction::make(),
            //ExportBulkAction::make(),
=======
            'delete' => Tables\Actions\DeleteBulkAction::make(),
            'export' => ExportBulkAction::make(),
>>>>>>> d46f92c (.)
        ];
    }
}
