<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources;

use Filament\Forms\Components\TextInput;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Filament\Forms\Components\Toggle;
use Modules\User\Filament\Resources\FeatureResource\Pages\CreateFeature;
use Modules\User\Filament\Resources\FeatureResource\Pages\EditFeature;
use Modules\User\Filament\Resources\FeatureResource\Pages\ListFeatures;
use Modules\User\Models\Feature;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;

/**
 * @property Feature $record
<<<<<<< HEAD
=======
=======
use Modules\User\Filament\Resources\FeatureResource\Pages;
use Modules\User\Models\Feature;
use Modules\Xot\Filament\Resources\XotBaseResource;

/**
 * @property Feature $record
 *                           -------
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
 */
class FeatureResource extends XotBaseResource
{
    protected static ?string $model = Feature::class;

    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
            'name' => TextInput::make('name')
                ->required()
                ->maxLength(255),
            'type' => TextInput::make('type')
                ->required()
                ->maxLength(255),
            'active' => Toggle::make('active')
                ->required(),
<<<<<<< HEAD
=======
=======
            TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->placeholder(static::trans('fields.name.placeholder'))
                ->helperText(static::trans('fields.name.helper_text')),

            TextInput::make('scope')
                ->required()
                ->maxLength(255)
                ->placeholder(static::trans('fields.scope.placeholder'))
                ->helperText(static::trans('fields.scope.helper_text')),

            TextInput::make('value')
                ->required()
                ->maxLength(255)
                ->placeholder(static::trans('fields.value.placeholder'))
                ->helperText(static::trans('fields.value.helper_text')),
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
        ];
    }

    public static function getRelations(): array
    {
<<<<<<< HEAD
        return [];
=======
<<<<<<< HEAD
        return [];
=======
        return [
        ];
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    }

    public static function getPages(): array
    {
        return [
<<<<<<< HEAD
            'index' => ListFeatures::route('/'),
            'create' => CreateFeature::route('/create'),
            'edit' => EditFeature::route('/{record}/edit'),
=======
<<<<<<< HEAD
            'index' => ListFeatures::route('/'),
            'create' => CreateFeature::route('/create'),
            'edit' => EditFeature::route('/{record}/edit'),
=======
            'index' => Pages\ListFeatures::route('/'),
            'create' => Pages\CreateFeature::route('/create'),
            'edit' => Pages\EditFeature::route('/{record}/edit'),
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
        ];
    }
}
