<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\TeamResource\Pages;

<<<<<<< HEAD
use Filament\Actions\EditAction;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Section;
use Modules\User\Filament\Resources\TeamResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;

class ViewTeam extends \Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord
=======
use Filament\Pages\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Modules\User\Filament\Resources\TeamResource;

class ViewTeam extends ViewRecord
>>>>>>> 67cd443 (.)
{
    // //
    protected static string $resource = TeamResource::class;

<<<<<<< HEAD
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

=======
>>>>>>> 67cd443 (.)
    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
