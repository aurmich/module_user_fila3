<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\TeamResource\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Filament\Actions\EditAction;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Section;
use Modules\User\Filament\Resources\TeamResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;

class ViewTeam extends \Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord
<<<<<<< HEAD
=======
=======
use Filament\Pages\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Modules\User\Filament\Resources\TeamResource;

class ViewTeam extends ViewRecord
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
{
    // //
    protected static string $resource = TeamResource::class;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    /**
     * @return array<\Filament\Infolists\Components\Component>
     */
    public function getInfolistSchema(): array
    {
        return [
            Section::make()
                ->schema([
                    TextEntry::make('id'),
                    TextEntry::make('name'),
                    TextEntry::make('display_name'),
                    TextEntry::make('description'),
                    TextEntry::make('created_at'),
                    TextEntry::make('updated_at'),
                ])
        ];
    }

<<<<<<< HEAD
=======
=======
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
