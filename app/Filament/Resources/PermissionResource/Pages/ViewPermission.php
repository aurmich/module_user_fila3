<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\PermissionResource\Pages;

use Filament\Infolists\Components\TextEntry;
use Modules\User\Filament\Resources\PermissionResource;

class ViewPermission extends \Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord
{
    protected static string $resource = PermissionResource::class;

    /**
     * @return array<string, \Filament\Infolists\Components\Component>
     */
    public function getInfolistSchema(): array
    {
        return [
            'name' => TextEntry::make('name')
                ->label((string) __('user::permission.fields.name.label')),
            'guard_name' => TextEntry::make('guard_name')
                ->label((string) __('user::permission.fields.guard_name.label')),
            'active' => TextEntry::make('active')
                ->label((string) __('user::permission.fields.active.label'))
                ->formatStateUsing(fn ($state): string => $state ? (string) __('user::common.yes') : (string) __('user::common.no')),
            'created_at' => TextEntry::make('created_at')
                ->label((string) __('user::permission.fields.created_at.label'))
                ->dateTime(),
        ];
    }
}
