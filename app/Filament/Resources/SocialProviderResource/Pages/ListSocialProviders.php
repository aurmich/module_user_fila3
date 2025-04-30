<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\SocialProviderResource\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Modules\User\Filament\Resources\SocialProviderResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;



<<<<<<< HEAD
=======
=======
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Modules\User\Filament\Resources\SocialProviderResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
/**
 * --.
 */
class ListSocialProviders extends XotBaseListRecords
{
    protected static string $resource = SocialProviderResource::class;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    

>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    public function getListTableColumns(): array
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
<<<<<<< HEAD
            'active' => \Filament\Tables\Filters\SelectFilter::make('active')
=======
<<<<<<< HEAD
            'active' => \Filament\Tables\Filters\SelectFilter::make('active')
=======
            'active'=>\Filament\Tables\Filters\SelectFilter::make('active')
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
                ->options([
                    true => 'Active',
                    false => 'Inactive',
                ]),
        ];
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

   
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
}
