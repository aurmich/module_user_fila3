<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\SocialProviderResource\Pages;

use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Modules\User\Filament\Resources\SocialProviderResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

<<<<<<< Updated upstream
<<<<<<< HEAD


=======
<<<<<<< HEAD
=======


>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
=======


>>>>>>> Stashed changes
/**
 * --.
 */
class ListSocialProviders extends XotBaseListRecords
{
    protected static string $resource = SocialProviderResource::class;

<<<<<<< Updated upstream
<<<<<<< HEAD
    public function getTableColumns(): array
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
    public function getTableColumns(): array
=======
    public function getListTableColumns(): array
>>>>>>> 73101fd (.)
=======
    public function getTableColumns(): array
>>>>>>> Stashed changes
=======
    public function getListTableColumns(): array
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
=======
    public function getTableColumns(): array
>>>>>>> Stashed changes
    {
        return [
            'name' => TextColumn::make('name')
                ->searchable()
                ->sortable()
                ->wrap(),
            'active' => IconColumn::make('active')
                ->boolean()
                ->sortable(),
            'stateless' => IconColumn::make('stateless')
                ->boolean()
                ->sortable(),
            'socialite' => IconColumn::make('socialite')
                ->boolean()
                ->sortable(),
            'scopes' => TextColumn::make('scopes')
                ->searchable()
                ->wrap(),
            'parameters' => TextColumn::make('parameters')
                ->searchable()
                ->wrap(),
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
            'updated_at' => TextColumn::make('updated_at')
                ->dateTime()
                ->sortable(),
        ];
    }

    public function getTableFilters(): array
    {
        return [
            'active' => \Filament\Tables\Filters\SelectFilter::make('active')
                ->options([
                    true => 'Active',
                    false => 'Inactive',
                ]),
        ];
    }
}
