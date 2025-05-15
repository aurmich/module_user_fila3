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
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\HasXotTable;

<<<<<<< Updated upstream
<<<<<<< HEAD
=======
=======
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\HasXotTable;
>>>>>>> 019e694 (.)

=======
>>>>>>> Stashed changes







<<<<<<< HEAD
=======

<<<<<<< Updated upstream
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
=======
>>>>>>> Stashed changes
/**
 * Class Modules\User\Filament\Resources\UserResource\RelationManagers\SocialiteUsersRelationManager.
 */
class SocialiteUsersRelationManager extends XotBaseRelationManager
{
    use HasXotTable;

    protected static string $relationship = 'socialiteUsers';

    /**
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 019e694 (.)
=======
>>>>>>> Stashed changes
     * Configure the form schema for managing Socialite User data.
     */


    /**
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
=======
>>>>>>> Stashed changes
     * Define form fields in a dedicated method for reusability.
     *
     * @return array<Forms\Components\Component>
     */
    public function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('provider')
<<<<<<< Updated upstream
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======

>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
=======

>>>>>>> Stashed changes
                ->required()
                ->maxLength(255)
                ->placeholder(__('Enter provider name, e.g., Google, Facebook')),

            Forms\Components\TextInput::make('provider_id')
<<<<<<< Updated upstream
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======

>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
=======

>>>>>>> Stashed changes
                ->required()
                ->maxLength(255)
                ->placeholder(__('Enter the provider ID for the user')),

            Forms\Components\TextInput::make('name')
<<<<<<< Updated upstream
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
=======
>>>>>>> Stashed changes

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
<<<<<<< Updated upstream
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
=======
>>>>>>> Stashed changes
        ];
    }

    /**
     * Define table columns in a separate, strongly-typed method.
     *
     * @return array<TextColumn|ImageColumn>
     */
<<<<<<< Updated upstream
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
=======
    public function getTableColumns(): array
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
=======
>>>>>>> Stashed changes
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
