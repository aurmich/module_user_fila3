<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\DeviceResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
<<<<<<< HEAD
=======
use Filament\Tables\Columns\Layout\Stack;
>>>>>>> 67cd443 (.)
use Filament\Tables\Columns\TextColumn;
use Modules\User\Filament\Resources\DeviceResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListDevices extends XotBaseListRecords
{
    protected static string $resource = DeviceResource::class;

<<<<<<< HEAD
=======
   
>>>>>>> 67cd443 (.)
    /**
     * @return array<string, \Filament\Tables\Columns\Column>
     */
    public function getListTableColumns(): array
    {
        return [
<<<<<<< HEAD
            'uuid' => TextColumn::make('uuid')
                ->searchable()
                ->sortable(),
            'mobile_id' => TextColumn::make('mobile_id')
                ->searchable()
                ->sortable(),
            'device' => TextColumn::make('device')
                ->searchable()
                ->sortable(),
            'platform' => TextColumn::make('platform')
                ->searchable()
                ->sortable(),
            'browser' => TextColumn::make('browser')
                ->searchable()
                ->sortable(),
            'version' => TextColumn::make('version')
                ->searchable()
                ->sortable(),
            'is_robot' => IconColumn::make('is_robot')
                ->boolean(),
            'is_desktop' => IconColumn::make('is_desktop')
                ->boolean(),
            'is_mobile' => IconColumn::make('is_mobile')
                ->boolean(),
            'is_tablet' => IconColumn::make('is_tablet')
                ->boolean(),
            'is_phone' => IconColumn::make('is_phone')
                ->boolean(),
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
        ];
    }

    
=======
            'id' => TextColumn::make('id'),
            'name' => TextColumn::make('name'),
            'type' => TextColumn::make('type'),
            'active' => IconColumn::make('active')
                ->boolean(),
        ];
    }

    /**
     * @return array<\Filament\Tables\Filters\BaseFilter>
     */
    public function getTableFilters(): array
    {
        return [
        ];
    }

    /**
     * @return array<\Filament\Tables\Actions\Action|\Filament\Tables\Actions\ActionGroup>
     */
    public function getTableActions(): array
    {
        return [
            ViewAction::make()
                ->label(''),
            EditAction::make()
                ->label(''),
            DeleteAction::make()
                ->label('')
                ->requiresConfirmation(),
        ];
    }

    /**
     * @return array<string, \Filament\Tables\Actions\BulkAction>
     */
    public function getTableBulkActions(): array
    {
        return [
            'delete' => DeleteBulkAction::make(),
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
>>>>>>> 67cd443 (.)
}
