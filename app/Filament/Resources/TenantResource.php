<?php

declare(strict_types=1);

/**
 * @see https://github.com/savannabits/filament-tenancy-starter/blob/main/app/Filament/resources/TenantResource.php
 */

namespace Modules\User\Filament\Resources;

use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Services\XotService;

class TenantResource extends XotBaseResource
{
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    /**
     * Get the model class name for this resource.
     *
     * @return class-string<\Illuminate\Database\Eloquent\Model>
     */
    public static function getModel(): string
    {
        $xot = app(XotService::class);
        return $xot->getTenantClass();
    }

    public static function getFormSchema(): array
    {
        return [
            Section::make()
                ->schema([
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('slug')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('domain')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('email')
                        ->email()
                        ->required()
                        ->maxLength(255),

                    TextInput::make('phone')
                        ->tel()
                        ->maxLength(255),

                    TextInput::make('mobile')
                        ->tel()
                        ->maxLength(255),

                    TextInput::make('address')
                        ->maxLength(255),

                    ColorPicker::make('primary_color'),

                    ColorPicker::make('secondary_color'),
                ])
                ->columns(2)
        ];
    }
}
