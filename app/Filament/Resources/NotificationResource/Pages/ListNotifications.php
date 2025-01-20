<?php

namespace Modules\Notify\Filament\Resources\NotificationResource\Pages;

use Filament\Actions;
use Modules\Notify\Filament\Resources\NotificationResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListNotifications extends XotBaseListRecords
{
    protected static string $resource = NotificationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\EditAction::make(),
            Actions\DeleteAction::make()
                ->action(fn () => $this->record->softDelete()),
        ];
    }
}
