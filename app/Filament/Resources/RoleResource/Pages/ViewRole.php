<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\RoleResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Infolists\Components\Section;
=======
>>>>>>> 8d82f8c (.)
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Section;
use Filament\Pages\Actions\EditAction;
use Modules\User\Filament\Resources\RoleResource;
<<<<<<< HEAD
=======
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Section;
use Filament\Pages\Actions\EditAction;
use Modules\User\Filament\Resources\RoleResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
>>>>>>> 8055579 (.)
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
>>>>>>> 8d82f8c (.)

class ViewRole extends \Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord
{
    protected static string $resource = RoleResource::class;
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 8055579 (.)
=======
    
>>>>>>> 8d82f8c (.)
    /**
     * @return array<\Filament\Infolists\Components\Component>
     */
    protected function getInfolistSchema(): array
    {
        return [
            Section::make()
                ->schema([
                    TextEntry::make('id'),
                    TextEntry::make('name'),
                    TextEntry::make('guard_name'),
                    TextEntry::make('team_id'),
                    TextEntry::make('uuid'),
                    TextEntry::make('created_at'),
                    TextEntry::make('updated_at'),
<<<<<<< HEAD
<<<<<<< HEAD
                ]),
=======
                ])
>>>>>>> 8055579 (.)
=======
                ])
>>>>>>> 8d82f8c (.)
        ];
    }
}
