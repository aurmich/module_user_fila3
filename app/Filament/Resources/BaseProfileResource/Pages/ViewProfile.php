<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\BaseProfileResource\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Infolists\Components;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Modules\User\Filament\Resources\BaseProfileResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;

class ViewProfile extends \Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord
<<<<<<< HEAD
=======
=======
use Filament\Actions;
use Filament\Infolists\Components;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;
use Modules\User\Filament\Resources\BaseProfileResource;

class ViewProfile extends ViewRecord
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
{
    protected static string $resource = BaseProfileResource::class;

    /*
    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
    */

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    /**
     * @return array<string, \Filament\Infolists\Components\Component>
     */
    public function getInfolistSchema(): array 
    {
        return [
            'profile_info' => Components\Section::make()
                ->schema([
                    Components\Split::make([
                        Components\Grid::make(2)
                            ->schema([
                                Components\Group::make([
                                    TextEntry::make('email'),
                                    TextEntry::make('first_name'),
                                    TextEntry::make('last_name'),
                                    TextEntry::make('created_at')
                                        ->badge()
                                        ->date()
                                        ->color('success'),
                                ]),
                                /*
<<<<<<< HEAD
=======
=======
    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Components\Section::make()
                    ->schema([
                        Components\Split::make([
                            Components\Grid::make(2)
                                ->schema([
                                    Components\Group::make([
                                        TextEntry::make('email'),
                                        TextEntry::make('first_name'),
                                        TextEntry::make('last_name'),
                                        TextEntry::make('created_at')
                                            ->badge()
                                            ->date()
                                            ->color('success'),
                                    ]),
                                    /*
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
                                Components\Group::make([
                                    Components\TextEntry::make('author.name'),
                                    Components\TextEntry::make('category.name'),
                                    Components\TextEntry::make('tags')
                                        ->badge()
                                        ->getStateUsing(fn () => ['one', 'two', 'three', 'four']),
                                ]),
                                */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
                            ]),
                        Components\ImageEntry::make('image')
                            ->hiddenLabel()
                            ->grow(false),
                    ])->from('lg'),
                ]),
            'content' => Components\Section::make('Content')
                ->schema([
                    TextEntry::make('content')
                        ->prose()
                        ->markdown()
                        ->hiddenLabel(),
                ])
                ->collapsible(),
        ];
<<<<<<< HEAD
=======
=======
                                ]),
                            Components\ImageEntry::make('image')
                                ->hiddenLabel()
                                ->grow(false),
                        ])->from('lg'),
                    ]),
                Components\Section::make('Content')
                    ->schema([
                        TextEntry::make('content')
                            ->prose()
                            ->markdown()
                            ->hiddenLabel(),
                    ])
                    ->collapsible(),
            ]);
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    }
}
