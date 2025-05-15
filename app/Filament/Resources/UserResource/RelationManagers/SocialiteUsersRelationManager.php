<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Modules\User\Models\SocialiteUser;
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\HasXotTable;

<<<<<<< HEAD
=======
=======
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\HasXotTable;
>>>>>>> 019e694 (.)








<<<<<<< HEAD
=======

>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
/**
 * Class Modules\User\Filament\Resources\UserResource\RelationManagers\SocialiteUsersRelationManager.
 */
class SocialiteUsersRelationManager extends XotBaseRelationManager
{
    use HasXotTable;

    protected static string $relationship = 'socialiteUsers';

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 019e694 (.)
     * Configure the form schema for managing Socialite User data.
     */


    /**
<<<<<<< HEAD
=======
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
     * Define form fields in a dedicated method for reusability.
     *
     * @return array<Forms\Components\Component>
     */
    public function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('provider')
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======

>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
                ->required()
                ->maxLength(255)
                ->placeholder(__('Enter provider name, e.g., Google, Facebook')),

            Forms\Components\TextInput::make('provider_id')
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======

>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
                ->required()
                ->maxLength(255)
                ->placeholder(__('Enter the provider ID for the user')),

            Forms\Components\TextInput::make('name')
<<<<<<< HEAD

=======
<<<<<<< HEAD
>>>>>>> 019e694 (.)
                ->maxLength(255)
                ->placeholder(__('User’s name associated with the provider')),

            Forms\Components\TextInput::make('email')

                ->email()
                ->maxLength(255)
                ->placeholder(__('User’s email associated with the provider')),

            Forms\Components\TextInput::make('avatar')

                ->url()
                ->maxLength(512)
<<<<<<< HEAD
                ->placeholder(__('URL of the user’s avatar image')),
=======
                ->placeholder(__("URL of the user's avatar image")),
=======

                ->maxLength(255)
                ->placeholder(__('User’s name associated with the provider')),

            Forms\Components\TextInput::make('email')

                ->email()
                ->maxLength(255)
                ->placeholder(__('User’s email associated with the provider')),

            Forms\Components\TextInput::make('avatar')

                ->url()
                ->maxLength(512)
                ->placeholder(__('URL of the user’s avatar image')),
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
        ];
    }

    /**
     * Define table columns in a separate, strongly-typed method.
     *
     * @return array<TextColumn|ImageColumn>
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
>>>>>>> 019e694 (.)
    public function getTableColumns(): array
    {
        return [
            TextColumn::make('provider')

                ->searchable(),

            TextColumn::make('provider_id')

                ->searchable(),

            TextColumn::make('name')

                ->searchable(),

            TextColumn::make('email')

                ->searchable(),

            ImageColumn::make('avatar')
<<<<<<< HEAD

=======
=======
    public function getListTableColumns(): array
    {
        return [
            TextColumn::make('provider')

                ->searchable(),

            TextColumn::make('provider_id')

                ->searchable(),

            TextColumn::make('name')

                ->searchable(),

            TextColumn::make('email')

                ->searchable(),

            ImageColumn::make('avatar')

>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
                ->size(40),
        ];
    }

    //  * Query scope to apply conditions to the relation manager.

    // protected function applyTableQueryScope(Builder $query): Builder
    // {
    //     return $query->when(
    //         in_array(SoftDeletingScope::class, class_uses_recursive(SocialiteUser::class)),
    //         fn (Builder $query) => $query->withTrashed()
    //     );
    // }
}
