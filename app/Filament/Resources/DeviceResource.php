<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources;

use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Modules\User\Models\Device;
use Modules\Xot\Filament\Resources\XotBaseResource;

class DeviceResource extends XotBaseResource
{
    protected static ?string $model = Device::class;

    public static function getFormSchema(): array
    {
        return [
            'uuid' => TextInput::make('uuid')
                ->label((string) __('user::device.fields.uuid.label'))
                ->maxLength(255),
            'mobile_id' => TextInput::make('mobile_id')
                ->label((string) __('user::device.fields.mobile_id.label'))
                ->maxLength(255),
            'languages' => TagsInput::make('languages')
                ->label((string) __('user::device.fields.languages.label'))
                ->suggestions([
                    'it' => 'Italiano',
                    'en' => 'English',
                    'es' => 'Español',
                    'fr' => 'Français',
                    'de' => 'Deutsch',
                ])
                ->placeholder((string) __('user::device.fields.languages.placeholder'))
                ->helperText((string) __('user::device.fields.languages.help'))
                ->separator(',')
                ->reorderable(),
            'device' => TextInput::make('device')
                ->label((string) __('user::device.fields.device.label'))
                ->maxLength(255),
            'platform' => TextInput::make('platform')
                ->label((string) __('user::device.fields.platform.label'))
                ->maxLength(255),
            'browser' => TextInput::make('browser')
                ->label((string) __('user::device.fields.browser.label'))
                ->maxLength(255),
            'version' => TextInput::make('version')
                ->label((string) __('user::device.fields.version.label'))
                ->maxLength(255),
            'is_robot' => Toggle::make('is_robot')
                ->label((string) __('user::device.fields.is_robot.label')),
            'robot' => TextInput::make('robot')
                ->label((string) __('user::device.fields.robot.label'))
                ->maxLength(255)
                ->visible(fn (callable $get) => $get('is_robot')),
            'is_desktop' => Toggle::make('is_desktop')
                ->label((string) __('user::device.fields.is_desktop.label')),
            'is_mobile' => Toggle::make('is_mobile')
                ->label((string) __('user::device.fields.is_mobile.label')),
            'is_tablet' => Toggle::make('is_tablet')
                ->label((string) __('user::device.fields.is_tablet.label')),
            'is_phone' => Toggle::make('is_phone')
                ->label((string) __('user::device.fields.is_phone.label')),
        ];
    }
}
