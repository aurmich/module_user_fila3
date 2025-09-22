<?php

declare(strict_types=1);

namespace Modules\User\Filament\Clusters\Appearance\Pages;

use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Support\Exceptions\Halt;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Filament\Clusters\Appearance;

/**
 * @property Forms\ComponentContainer $form
 */
class CustomCss extends Page implements HasForms
{
    use InteractsWithForms;

<<<<<<< HEAD
    public null|array $data = [];

    protected static null|string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'user::filament.clusters.appearance.pages.custom-css';

    protected static null|string $cluster = Appearance::class;

    protected static null|int $navigationSort = 6;
=======
    public ?array $data = [];

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'user::filament.clusters.appearance.pages.custom-css';

    protected static ?string $cluster = Appearance::class;

    protected static ?int $navigationSort = 6;
>>>>>>> 079c9da7 (.)

    public function mount(): void
    {
        $this->fillForms();
    }

    // protected function getForms(): array
    // {
    //    return [
    //        'editLogoForm',
    //    ];
    // }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\Section::make('Profile Information')
                // ->description('Update your account\'s profile information and email address.')
                // ->schema([
                ColorPicker::make('background_color'),
                FileUpload::make('background'),
                ColorPicker::make('overlay_color'),
<<<<<<< HEAD
                TextInput::make('overlay_opacity')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(100),
                // ])->columns(2),
            ])
            ->columns(2)
=======
                TextInput::make('overlay_opacity')->numeric()->minValue(0)->maxValue(100),

                // ])->columns(2),
            ])->columns(2)
>>>>>>> 079c9da7 (.)
            // ->model($this->getUser())
            ->statePath('data');
    }

    public function updateData(): void
    {
        try {
            $data = $this->form->getState();
            dddx($data);
<<<<<<< HEAD

=======
>>>>>>> 079c9da7 (.)
            // $this->handleRecordUpdate($this->getUser(), $data);
        } catch (Halt $exception) {
            dddx($exception->getMessage());

            return;
        }
    }

    protected function fillForms(): void
    {
        // $data = $this->getUser()->attributesToArray();
        $data = [];

        $this->form->fill($data);
    }

    protected function getUpdateFormActions(): array
    {
        return [
<<<<<<< HEAD
            Action::make('updateAction')->submit('editForm'),
=======
            Action::make('updateAction')

                ->submit('editForm'),
>>>>>>> 079c9da7 (.)
        ];
    }

    /**
     * @param  array<string, mixed>  $data
     */
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $record->update($data);

        return $record;
    }
}
