<?php

/**
 * --.
 */
declare(strict_types=1);

namespace Modules\User\Filament\Resources\TenantResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
<<<<<<< HEAD
use Illuminate\Support\Str;
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;









=======
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;

>>>>>>> 67cd443 (.)
class DomainsRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'domains';

<<<<<<< HEAD
    /**
     * @return array<string, \Filament\Forms\Components\Component>
     */
    public function getFormSchema(): array
    {
        return [
            'domain' => Forms\Components\TextInput::make('domain')
                ->required()
                ->prefix('http(s)://')
                ->suffix('.'.request()->getHost())
                ->maxLength(255),
        ];
=======
    public function form(Form $form): Form
    {
        return $form
            ->schema(
                [
                    Forms\Components\TextInput::make('domain')
                        ->required()
                        ->prefix('http(s)://')
                        ->suffix('.'.request()->getHost())
                        ->maxLength(255),
                ]
            );
>>>>>>> 67cd443 (.)
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('domain')
            ->columns(
                [
                    Tables\Columns\TextColumn::make('domain'),
<<<<<<< HEAD
                    Tables\Columns\TextColumn::make('full-domain')->getStateUsing(static fn ($record) => Str::of($record->domain)->append('.')->append(request()->getHost())),
=======
                    Tables\Columns\TextColumn::make('full-domain')->getStateUsing(static fn ($record) => \Str::of($record->domain)->append('.')->append(request()->getHost())),
>>>>>>> 67cd443 (.)
                ]
            )
            ->filters(
                [
                ]
            )
            ->headerActions(
                [
                    Tables\Actions\CreateAction::make(),
                ]
            )
            ->actions(
                [
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]
            )
            ->bulkActions(
                [
                    Tables\Actions\BulkActionGroup::make(
                        [
                            Tables\Actions\DeleteBulkAction::make(),
                        ]
                    ),
                ]
            );
    }
}
