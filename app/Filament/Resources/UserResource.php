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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\HtmlString;
use Modules\User\Filament\Resources\UserResource\Pages;
<<<<<<< HEAD
use Modules\User\Filament\Resources\UserResource\Widgets\UserOverview;
use Modules\Xot\Filament\Resources\XotBaseResource;

=======
<<<<<<< HEAD
use Modules\User\Filament\Resources\UserResource\Widgets\UserOverview;
use Modules\Xot\Filament\Resources\XotBaseResource;

=======
use Modules\User\Filament\Resources\UserResource\RelationManagers;
use Modules\User\Filament\Resources\UserResource\Widgets\UserOverview;
use Modules\Xot\Filament\Resources\XotBaseResource;

<<<<<<< HEAD



use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;





>>>>>>> origin/dev
>>>>>>> 867b3bd (.)
=======
>>>>>>> 5a344fb (.)
class UserResource extends XotBaseResource
{
    // protected static ?string $model = \Modules\Xot\Datas\XotData::make()->getUserClass();

<<<<<<< HEAD
=======
<<<<<<< HEAD
    // protected static ?string $navigationIcon = 'heroicon-o-users'; // gestito da traduzioni

    /**
     * Restituisce i widget associati alla risorsa utente.
     * @return array<class-string>
     */
=======
>>>>>>> 867b3bd (.)
    protected static ?string $navigationIcon = 'heroicon-o-users';

    // Static property Modules\User\Filament\Resources\UserResource::$enablePasswordUpdates is never read, only written.
    // private static bool|\Closure $enablePasswordUpdates = true;

<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> 867b3bd (.)
    public static function getWidgets(): array
    {
        return [
            UserOverview::class,
        ];
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * Restituisce lo schema del form per la risorsa utente.
     * @return array<string, Section>
     */
=======
>>>>>>> 867b3bd (.)
    // public static function extendForm(\Closure $callback): void
    // {
    //    static::$extendFormCallback = $callback;
    // }

<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> 867b3bd (.)
    public static function getFormSchema(): array
    {
        return [
            'section01' => Section::make([
                'name' => TextInput::make('name')
                    ->required(),
                'email' => TextInput::make('email')
                    ->required()
                    ->unique(ignoreRecord: true),
                'password' => TextInput::make('password')
                    ->password()
                    ->dehydrateStateUsing(fn ($state) => ! empty($state) ? Hash::make($state) : null)
                    ->required(fn ($livewire) => $livewire instanceof Pages\CreateUser),
            ])->columnSpan(8),
            'section02' => Section::make([
                'created_at' => Placeholder::make('created_at')
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 867b3bd (.)
                    ->content(static function ($record) {
                        if ($record === null || $record->created_at === null) {
                            return new HtmlString('&mdash;');
                        }
<<<<<<< HEAD
                        
                        return $record->created_at->diffForHumans();
                    }),
=======
                        return $record->created_at->diffForHumans();
                    }),
=======
                    ->content(static fn ($record) => $record->created_at->diffForHumans() ?? new HtmlString('&mdash;')),
>>>>>>> origin/dev
>>>>>>> 867b3bd (.)
            ])->columnSpan(4),
        ];
    }

<<<<<<< HEAD
=======
    /**
     * ---.
<<<<<<< HEAD
     * @return array<string, class-string>
     */
    public static function getRelations(): array
    {
        // Relazioni esempio, da implementare secondo necessità
        // return [
        //     'teams' => RelationManagers\TeamsRelationManager::class,
        //     'tenants' => RelationManagers\TenantsRelationManager::class,
        // ];
        return [];
    }

=======
     */
    public static function getRelations(): array
    {
        return [
            'teams' => RelationManagers\TeamsRelationManager::class,
            'tenants' => RelationManagers\TenantsRelationManager::class,
        ];
    }

>>>>>>> 867b3bd (.)
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

<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> 867b3bd (.)
    public function hasCombinedRelationManagerTabsWithContent(): bool
    {
        return true;
    }
}
