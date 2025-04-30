<?php

/**
 * Tenant List Management.
 */
declare(strict_types=1);

namespace Modules\User\Filament\Resources\TenantResource\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Str;
use Modules\User\Filament\Resources\TenantResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;
=======
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;
=======
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev

class ListTenants extends XotBaseListRecords
{
    protected static string $resource = TenantResource::class;

    /**
     * Definisce le colonne della tabella per la lista tenant.
     */
    public function getListTableColumns(): array
    {
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
            'id' => TextColumn::make('id')
                ->searchable()
                ->sortable(),

            'name' => TextColumn::make('name')
                ->searchable(),

            'slug' => TextColumn::make('slug')
                ->default(function ($record) {
                    if ($record === null) {
                        return '';
                    }
<<<<<<< HEAD
=======
=======
            'id'=>TextColumn::make('id')
                ->searchable()
                ->sortable(),

            'name'=>TextColumn::make('name')
                ->searchable(),

            'slug'=>TextColumn::make('slug')
                ->default(function ($record) {
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
                    $record->generateSlug();
                    $slug = Str::slug($record->name);
                    $record->slug = $slug;
                    $record->save();

                    return $slug;
                })
                ->sortable(),
        ];
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

    
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
}
