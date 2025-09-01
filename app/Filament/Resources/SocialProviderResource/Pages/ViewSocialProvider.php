<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\SocialProviderResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Infolists\Components\Section;
=======
use Filament\Actions;
>>>>>>> 8d82f8c (.)
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Section;
use Modules\User\Filament\Resources\SocialProviderResource;
<<<<<<< HEAD

=======
use Filament\Actions;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Section;
use Modules\User\Filament\Resources\SocialProviderResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
>>>>>>> 8055579 (.)
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
>>>>>>> 8d82f8c (.)
use function Safe\json_encode;

class ViewSocialProvider extends \Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord
{
    protected static string $resource = SocialProviderResource::class;

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
                    TextEntry::make('scopes')
                        ->formatStateUsing(function ($state): string {
                            if (is_array($state)) {
                                return json_encode($state);
                            }
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 8055579 (.)
=======
>>>>>>> 8d82f8c (.)
                            return is_string($state) ? $state : (string) $state;
                        }),
                    TextEntry::make('parameters')
                        ->formatStateUsing(function ($state): string {
                            if (is_array($state)) {
                                return json_encode($state);
                            }
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 8055579 (.)
=======
>>>>>>> 8d82f8c (.)
                            return is_string($state) ? $state : (string) $state;
                        }),
                    TextEntry::make('stateless')
                        ->badge()
                        ->color(fn (bool $state): string => $state ? 'success' : 'danger'),
                    TextEntry::make('active')
                        ->badge()
                        ->color(fn (bool $state): string => $state ? 'success' : 'danger'),
                    TextEntry::make('socialite')
                        ->badge()
                        ->color(fn (bool $state): string => $state ? 'success' : 'danger'),
                    TextEntry::make('svg')
                        ->html(),
                    TextEntry::make('created_at'),
                    TextEntry::make('updated_at'),
<<<<<<< HEAD
<<<<<<< HEAD
                ]),
        ];
    }
=======
                ])
        ];
    }

    
>>>>>>> 8055579 (.)
=======
                ])
        ];
    }

    
>>>>>>> 8d82f8c (.)
}
