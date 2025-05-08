<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources;

use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Modules\User\Filament\Resources\DeviceResource\Pages\CreateDevice;
use Modules\User\Filament\Resources\DeviceResource\Pages\EditDevice;
use Modules\User\Filament\Resources\DeviceResource\Pages\ListDevices;
use Modules\User\Filament\Resources\DeviceResource\RelationManagers\UsersRelationManager;
use Modules\User\Models\Device;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager;
use Filament\Forms\Components\Forms;

class DeviceResource extends XotBaseResource
{
    protected static ?string $model = Device::class;

    public static function getFormSchema(): array
    {
        return [
            \Filament\Forms\Components\TextInput::make('uuid')
                ->required()
                ->maxLength(255),
            \Filament\Forms\Components\TextInput::make('mobile_id')
                ->required()
                ->maxLength(255),
            \Filament\Forms\Components\TextInput::make('languages')
                ->required()
                ->maxLength(255),
            \Filament\Forms\Components\TextInput::make('device_name')
                ->required()
                ->maxLength(255),
            'platform' => TextInput::make('platform')
                ->maxLength(255),
            'browser' => TextInput::make('browser')
                ->maxLength(255),
            'version' => TextInput::make('version')
                ->maxLength(255),
            'is_robot' => Toggle::make('is_robot')
                ->label('Is Robot'),
            'robot' => TextInput::make('robot')
                ->maxLength(255)
                ->visible(fn (callable $get) => $get('is_robot')),
            'is_desktop' => Toggle::make('is_desktop')
                ->label('Is Desktop'),
            'is_mobile' => Toggle::make('is_mobile')
                ->label('Is Mobile'),
            'is_tablet' => Toggle::make('is_tablet')
                ->label('Is Tablet'),
            'is_phone' => Toggle::make('is_phone')
                ->label('Is Phone'),
        ];
    }

    
}
