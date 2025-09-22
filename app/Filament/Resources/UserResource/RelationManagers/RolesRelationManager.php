<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\RelationManagers;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Tables\Actions\AttachAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\DetachAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

<<<<<<< HEAD
=======








>>>>>>> 079c9da7 (.)
class RolesRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'roles';

<<<<<<< HEAD
    protected static null|string $recordTitleAttribute = 'name';
=======
    protected static ?string $recordTitleAttribute = 'name';
>>>>>>> 079c9da7 (.)

    // protected static ?string $inverseRelationship = 'section'; // Since the inverse related model is `Category`, this is normally `category`, not `section`.

    // protected function mutateFormDataBeforeCreate(array $data): array
    // {
<<<<<<< HEAD
    
=======
    //
>>>>>>> 079c9da7 (.)
    // }

    /**
     * @return array<string, \Filament\Forms\Components\Component>
     */
<<<<<<< HEAD
    #[\Override]
    public function getFormSchema(): array
    {
        return [
            'name' => TextInput::make('name')->required()->maxLength(255),
            /*
             * 'team_id' => Forms\Components\Select::make('team_id')
             * ->relationship('teams', 'name'),
             */
        ];
    }

    #[\Override]
=======
    public function getFormSchema(): array
    {
        return [
            'name' => TextInput::make('name')
                ->required()
                ->maxLength(255),
            /*
            'team_id' => Forms\Components\Select::make('team_id')
                ->relationship('teams', 'name'),
            */
        ];
    }

>>>>>>> 079c9da7 (.)
    public function table(Table $table): Table
    {
        $xotData = XotData::make();

        return $table
<<<<<<< HEAD
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('name'),
                TextColumn::make('team_id'),
            ])
            ->filters([])
            ->headerActions([
                // Tables\Actions\CreateAction::make(),
                AttachAction::make()
                    // ->mutateFormDataUsing(function (array $data): array {
                    //     // This is the test.
                    //     $data['team_id'] = 2;
                    //     return $data;
                    // }),
                    ->form(static fn(AttachAction $action): array => [
                        $action->getRecordSelect(),
                        // Forms\Components\TextInput::make('team_id')->required(),
                        Select::make('team_id')->options($xotData->getTeamClass()::get()->pluck('name', 'id')),
                        // ->options(function($item){
                        //     dddx($this);
                        // })
                    ]),
            ])
            ->actions([
                EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
                DetachAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
=======
            ->columns(
                [
                    TextColumn::make('id'),
                    TextColumn::make('name'),
                    TextColumn::make('team_id'),
                ]
            )
            ->filters(
                [
                ]
            )
            ->headerActions(
                [
                    // Tables\Actions\CreateAction::make(),
                    AttachAction::make()
                        // ->mutateFormDataUsing(function (array $data): array {
                        //     // This is the test.
                        //     $data['team_id'] = 2;
                        //     return $data;
                        // }),
                        ->form(
                            static fn (AttachAction $action): array => [
                                $action->getRecordSelect(),
                                // Forms\Components\TextInput::make('team_id')->required(),
                                Select::make('team_id')
                                    ->options($xotData->getTeamClass()::get()->pluck('name', 'id')),
                                // ->options(function($item){
                                //     dddx($this);
                                // })
                            ]
                        ),
                ]
            )
            ->actions(
                [
                    EditAction::make(),
                    // Tables\Actions\DeleteAction::make(),
                    DetachAction::make(),
                ]
            )
            ->bulkActions(
                [
                    DeleteBulkAction::make(),
                ]
            );
>>>>>>> 079c9da7 (.)
    }
}
