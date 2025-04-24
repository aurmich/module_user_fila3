<?php

/**
 * @see https://github.com/ryangjchandler/filament-user-resource/blob/main/src/resources/UserResource.php
 * @see https://github.com/3x1io/filament-user/blob/main/src/resources/UserResource.php
 */

declare(strict_types=1);

namespace Modules\User\Filament\Resources;

use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
<<<<<<< HEAD
=======
use Filament\Resources\RelationManagers\RelationGroup;
>>>>>>> 67cd443 (.)
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\HtmlString;
use Modules\User\Filament\Resources\UserResource\Pages;
use Modules\User\Filament\Resources\UserResource\RelationManagers;
use Modules\User\Filament\Resources\UserResource\Widgets\UserOverview;
use Modules\Xot\Filament\Resources\XotBaseResource;

<<<<<<< HEAD



use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;





=======
>>>>>>> 67cd443 (.)
class UserResource extends XotBaseResource
{
    // protected static ?string $model = \Modules\Xot\Datas\XotData::make()->getUserClass();

    protected static ?string $navigationIcon = 'heroicon-o-users';

    // Static property Modules\User\Filament\Resources\UserResource::$enablePasswordUpdates is never read, only written.
    // private static bool|\Closure $enablePasswordUpdates = true;

    public static function getWidgets(): array
    {
        return [
            UserOverview::class,
        ];
    }

    // public static function extendForm(\Closure $callback): void
    // {
    //    static::$extendFormCallback = $callback;
    // }

    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
            'section01' => Section::make([
                'name' => TextInput::make('name')
                    ->required(),
                'email' => TextInput::make('email')
                    ->required()
                    ->unique(ignoreRecord: true),
                'password' => TextInput::make('password')
=======
            'section01'=>Section::make([
                'name'=>TextInput::make('name')
                    ->required(),
                'email'=>TextInput::make('email')
                    ->required()
                    ->unique(ignoreRecord: true),
                'password'=>TextInput::make('password')
>>>>>>> 67cd443 (.)
                    ->password()
                    ->dehydrateStateUsing(fn ($state) => ! empty($state) ? Hash::make($state) : null)
                    ->required(fn ($livewire) => $livewire instanceof Pages\CreateUser),
            ])->columnSpan(8),
<<<<<<< HEAD
            'section02' => Section::make([
                'created_at' => Placeholder::make('created_at')
                    ->content(static fn ($record) => $record->created_at->diffForHumans() ?? new HtmlString('&mdash;')),
=======
            'section02'=>Section::make([
                'created_at'=>Placeholder::make('created_at')
                    ->content(static fn ($record) => $record?->created_at?->diffForHumans() ?? new HtmlString('&mdash;')),
>>>>>>> 67cd443 (.)
            ])->columnSpan(4),
        ];
    }

    /**
<<<<<<< HEAD
     * ---.
=======
     * ---
>>>>>>> 67cd443 (.)
     */
    public static function getRelations(): array
    {
        return [
            'teams' => RelationManagers\TeamsRelationManager::class,
            'tenants' => RelationManagers\TenantsRelationManager::class,
        ];
    }

<<<<<<< HEAD
=======
    

>>>>>>> 67cd443 (.)
    // public static function enablePasswordUpdates(bool|Closure $condition = true): void
    // {
    //     static::$enablePasswordUpdates = $condition;
    // }

    /*
    public static function getModel(): string
    {
        return config('filament-user-resource.model');
    }
    */

    public function hasCombinedRelationManagerTabsWithContent(): bool
    {
        return true;
    }
}
