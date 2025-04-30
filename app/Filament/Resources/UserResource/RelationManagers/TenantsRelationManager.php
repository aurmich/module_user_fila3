<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Modules\User\Filament\Resources\TenantResource\Pages\ListTenants;
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\HasXotTable;

/**
 * Manages the relationship between users and tenants.
 *
 * This class provides the form schema and table configuration for the "tenants" relationship
 * with strong typing and enhanced structure for stability and professionalism.
 */
class TenantsRelationManager extends XotBaseRelationManager
{
    use HasXotTable;

    protected static string $relationship = 'tenants';

    protected static ?string $recordTitleAttribute = 'name';

    /**
     * Set up the form schema for tenant relations.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
     * @return array<\Filament\Forms\Components\Component>
     */
    public function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
        ];
<<<<<<< HEAD
=======
=======
     * @param  Form  $form  the form instance for configuration
     * @return Form configured form instance
     */
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')

                    ->required()
                    ->maxLength(255),
            ]);
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    }

    /**
     * Define table columns for displaying tenant information.
     *
<<<<<<< HEAD
     * @return array<string, \Filament\Tables\Columns\Column>
=======
<<<<<<< HEAD
     * @return array<string, \Filament\Tables\Columns\Column>
=======
     * @return array<string, \Filament\Tables\Columns\Column> configured table columns
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
     */
    public function getListTableColumns(): array
    {
        return app(ListTenants::class)->getListTableColumns();
    }
}
