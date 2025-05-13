<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> ba18491 (.)
namespace Modules\User\Filament\Widgets;

use Filament\Forms\Form;
use Filament\Widgets\Widget;
use Modules\Xot\Datas\XotData;
use Livewire\Attributes\Validate;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Auth\Events\Registered;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

class RegistrationWidget extends XotBaseWidget
{
<<<<<<< HEAD
    public ?array $data = [];
=======
>>>>>>> ba18491 (.)
    protected int | string | array $columnSpan = 'full';
    public string $type;
    public string $resource;
    protected static string $view = 'pub_theme::filament.widgets.registration';

    public function mount(string $type): void
    {
        $this->type = $type;
<<<<<<< HEAD
        $this->resource = XotData::make()->getUserTypeResourceClass($type);
        $this->form->fill();
=======
        $this->resource=XotData::make()->getUserTypeResourceClass($type);
>>>>>>> ba18491 (.)
    }


    public function getFormSchema(): array
    {
        return $this->resource::getFormSchemaWidget();
    }

}