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
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;
=======
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;
=======
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev

class DeviceResource extends XotBaseResource
{
    protected static ?string $model = Device::class;

    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
            'uuid' => TextInput::make('uuid')
                ->label('UUID')
                ->maxLength(255),
            'mobile_id' => TextInput::make('mobile_id')
                ->label('Mobile ID')
                ->maxLength(255),
            'languages' => TagsInput::make('languages')
<<<<<<< HEAD
=======
=======
            TextInput::make('uuid')
                ->label('UUID')
                ->maxLength(255),
            TextInput::make('mobile_id')
                ->label('Mobile ID')
                ->maxLength(255),
            TagsInput::make('languages')
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
                ->label('Languages')
                ->suggestions([
                    'it' => 'Italiano',
                    'en' => 'English',
                    'es' => 'Español',
                    'fr' => 'Français',
                    'de' => 'Deutsch',
                ])
                ->placeholder('Add a language')
                ->helperText('Select or type languages codes (e.g. it, en, es)')
                ->separator(',')
                ->reorderable(),
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
            'device' => TextInput::make('device')
                ->label('Device Name')
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
<<<<<<< HEAD
=======
=======
            TextInput::make('device')
                ->label('Device Name')
                ->maxLength(255),
            TextInput::make('platform')
                ->maxLength(255),
            TextInput::make('browser')
                ->maxLength(255),
            TextInput::make('version')
                ->maxLength(255),
            Toggle::make('is_robot')
                ->label('Is Robot'),
            TextInput::make('robot')
                ->maxLength(255)
                ->visible(fn (callable $get) => $get('is_robot')),
            Toggle::make('is_desktop')
                ->label('Is Desktop'),
            Toggle::make('is_mobile')
                ->label('Is Mobile'),
            Toggle::make('is_tablet')
                ->label('Is Tablet'),
            Toggle::make('is_phone')
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
                ->label('Is Phone'),
        ];
    }

<<<<<<< HEAD
    
=======
<<<<<<< HEAD
    
=======
    public static function getRelations(): array
    {
        return [
            UsersRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDevices::route('/'),
            'create' => CreateDevice::route('/create'),
            'edit' => EditDevice::route('/{record}/edit'),
        ];
    }
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
}
