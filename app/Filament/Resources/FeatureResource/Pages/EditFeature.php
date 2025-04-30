<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\FeatureResource\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Modules\User\Filament\Resources\FeatureResource;




use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;





class EditFeature extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
{
    protected static string $resource = FeatureResource::class;
<<<<<<< HEAD
=======
=======
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\User\Filament\Resources\FeatureResource;

class EditFeature extends EditRecord
{
    protected static string $resource = FeatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
}
