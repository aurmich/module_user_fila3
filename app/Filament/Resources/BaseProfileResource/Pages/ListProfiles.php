<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\BaseProfileResource\Pages;

use Filament\Tables;
<<<<<<< HEAD
use Filament\Tables\Columns\IconColumn;
=======
<<<<<<< HEAD
use Filament\Tables\Columns\IconColumn;
=======
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\Layout\Stack;
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Modules\User\Filament\Resources\BaseProfileResource;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Filament\Tables\Actions\ExportBulkAction;
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev

/**
 * .
 */
class ListProfiles extends XotBaseListRecords
{
    protected static string $resource = BaseProfileResource::class;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    

>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    /**
     * @return array<string, Tables\Columns\Column>
     */
    public function getListTableColumns(): array
    {
        return [
<<<<<<< HEAD
            'user.name' => TextColumn::make('user.name')
=======
<<<<<<< HEAD
            'user.name' => TextColumn::make('user.name')
=======
            'user.name'=>TextColumn::make('user.name')
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
                ->sortable()
                ->searchable()
                ->default(
                    function ($record) {
                        $user = $record->user;
                        $user_class = XotData::make()->getUserClass();
                        if ($user === null) {
                            if ($record->email == null) {
                                $record->update(['email' => fake()->email()]);
                            }
                            try {
                                /** @var \Modules\Xot\Contracts\UserContract */
                                $user = XotData::make()->getUserByEmail($record->email);
                            } catch (\Exception $e) {
                                return '--';
                            }
                        }
                        if ($user === null) {
                            $data = $record->toArray();
                            $user_data = Arr::except($data, ['id']);
                            /** @var \Modules\Xot\Contracts\UserContract */
                            $user = $user_class::create($user_data);
                        }
                        $record->update(['user_id' => $user->id]);

                        return $user->name;
                    }
                ),
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
            'first_name' => TextColumn::make('first_name')
                ->sortable()
                ->searchable(),
            'last_name' => TextColumn::make('last_name')
                ->sortable()
                ->searchable(),
            'email' => TextColumn::make('email')
                ->sortable()
                ->searchable(),
            'is_active' => IconColumn::make('is_active')
                ->boolean(),
            'photo' => SpatieMediaLibraryImageColumn::make('photo')
<<<<<<< HEAD
=======
=======
            'first_name'=>TextColumn::make('first_name')
                ->sortable()
                ->searchable(),
            'last_name'=>TextColumn::make('last_name')
                ->sortable()
                ->searchable(),
            'email'=>TextColumn::make('email')
                ->sortable()
                ->searchable(),
            'is_active'=>IconColumn::make('is_active')
                ->boolean(),
            'photo'=>SpatieMediaLibraryImageColumn::make('photo')
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
                ->collection('profile'),
        ];
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
   

>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    /**
     * @return array<string, Tables\Filters\BaseFilter>
     */
    public function getTableFilters(): array
    {
        return [
<<<<<<< HEAD
            'is_active' => TernaryFilter::make('is_active')
=======
<<<<<<< HEAD
            'is_active' => TernaryFilter::make('is_active')
=======
            'is_active'=>TernaryFilter::make('is_active')
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
                ->placeholder(static::trans('filters.is_active.all'))
                ->trueLabel(static::trans('filters.is_active.active'))
                ->falseLabel(static::trans('filters.is_active.inactive'))
                ->queries(
                    true: static fn (Builder $query) => $query->where('is_active', '=', true),
                    false: static fn (Builder $query) => $query->where('is_active', '=', false),
                ),
        ];
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

   
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
}
