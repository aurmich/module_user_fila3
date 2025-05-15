<?php

/**
 * Tenant List Management.
 */
declare(strict_types=1);

namespace Modules\User\Filament\Resources\TenantResource\Pages;

use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Str;
use Modules\User\Filament\Resources\TenantResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListTenants extends XotBaseListRecords
{
    protected static string $resource = TenantResource::class;

    /**
     * Definisce le colonne della tabella per la lista tenant.
     */
<<<<<<< Updated upstream
<<<<<<< HEAD
    public function getTableColumns(): array
=======
    public function getListTableColumns(): array
>>>>>>> 73101fd (.)
=======
    public function getTableColumns(): array
>>>>>>> Stashed changes
    {
        return [
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
                    $record->generateSlug();
                    $slug = Str::slug($record->name);
                    $record->slug = $slug;
                    $record->save();

                    return $slug;
                })
                ->sortable(),
        ];
    }
}
