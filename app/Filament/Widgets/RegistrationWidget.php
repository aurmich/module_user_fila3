<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets;

use Filament\Forms\Form;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
=======
>>>>>>> 8d82f8c (.)
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Filament\Widgets\Widget;
use Illuminate\Http\Request;
use Webmozart\Assert\Assert;
use Modules\Xot\Datas\XotData;
use Livewire\Attributes\Validate;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Auth\Events\Registered;
use Filament\Forms\Components\Checkbox;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Contracts\UserContract;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Filament\Actions\Concerns\InteractsWithRecord;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


class RegistrationWidget extends XotBaseWidget
{
    
    public ?array $data = [];
    protected int | string | array $columnSpan = 'full';
    public string $type;
    public string $resource;
    public string $model;
    public string $action;
    public Model $record;
    
    /**
     * @phpstan-var class-string
<<<<<<< HEAD
     *
=======
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Filament\Widgets\Widget;
use Illuminate\Http\Request;
use Webmozart\Assert\Assert;
use Modules\Xot\Datas\XotData;
use Livewire\Attributes\Validate;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Auth\Events\Registered;
use Filament\Forms\Components\Checkbox;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Contracts\UserContract;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Filament\Actions\Concerns\InteractsWithRecord;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


class RegistrationWidget extends XotBaseWidget
{
    
    public ?array $data = [];
    protected int | string | array $columnSpan = 'full';
    public string $type;
    public string $resource;
    public string $model;
    public string $action;
    public Model $record;
    
    /**
     * @phpstan-var class-string
>>>>>>> 8055579 (.)
=======
>>>>>>> 8d82f8c (.)
     * @phpstan-ignore-next-line
     */
    protected static string $view = 'pub_theme::filament.widgets.registration';

    public function mount(string $type, Request $request): void
    {
        $this->type = $type;
        $this->resource = XotData::make()->getUserResourceClassByType($type);
        $this->model = $this->resource::getModel();
        $this->action = Str::of($this->model)->replace('\\Models\\', '\\Actions\\')->append('\\RegisterAction')->toString();
        $record = $this->getFormModel();
        $data = $this->getFormFill();
<<<<<<< HEAD
<<<<<<< HEAD
        $this->data = $data;
        $this->form->fill($data);
        $this->form->model($record);
        $this->record = $record;

=======
        $this->data = $data; 
        $this->form->fill($data);
        $this->form->model($record);
        $this->record = $record;
        
>>>>>>> 8055579 (.)
=======
        $this->data = $data; 
        $this->form->fill($data);
        $this->form->model($record);
        $this->record = $record;
        
>>>>>>> 8d82f8c (.)
    }

    public function getFormModel(): Model
    {
<<<<<<< HEAD
<<<<<<< HEAD

=======
       
>>>>>>> 8055579 (.)
=======
       
>>>>>>> 8d82f8c (.)
        $data = request()->all();
        $email = Arr::get($data, 'email');
        $token = Arr::get($data, 'token');

        $user = $this->model::firstWhere('email', $email);
        if ($user === null) {
            return app($this->model);
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8055579 (.)
=======
        
>>>>>>> 8d82f8c (.)
        $remember_token = $user->remember_token;
        if ($remember_token === null) {
            $user->remember_token = Str::uuid()->toString();
            $user->save();
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8d82f8c (.)
        if ($remember_token === $token) {
            $this->record = $user;
            return $user;
        }
        
        return app($this->model);
    }

    public function getFormFill(): array{
        $data=parent::getFormFill();
        $data['type']=$this->type;
        
        return $data;
    }

<<<<<<< HEAD
=======
        
        if ($remember_token === $token) {
            $this->record = $user;
            return $user;
        }
        
        return app($this->model);
    }

    public function getFormFill(): array{
        $data=parent::getFormFill();
        $data['type']=$this->type;
        
        return $data;
    }

   

>>>>>>> 8055579 (.)
=======
   

>>>>>>> 8d82f8c (.)
    public function getFormSchema(): array
    {
        return $this->resource::getFormSchemaWidget();
    }

    /**
     * @see https://filamentphp.com/docs/3.x/forms/adding-a-form-to-a-livewire-component
     */
    public function register(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $lang = app()->getLocale();

=======
        $lang=app()->getLocale();
        
>>>>>>> 8d82f8c (.)
        $data = $this->form->getState();
        
        $data=array_merge($this->data ?? [],$data);
        $record = $this->record;
       
        $user = app($this->action)->execute($record, $data);

        $lang=app()->getLocale();
        $route=route('pages.view', ['slug' => $this->type . '_register_complete']);
        $route=LaravelLocalization::localizeUrl($route,$lang);
        
        //return redirect()->route('pages.view', ['slug' => $this->type . '_register_complete','lang'=>$lang]);
        return redirect($route);
    }
<<<<<<< HEAD
=======
        $lang=app()->getLocale();
        
        $data = $this->form->getState();
        
        $data=array_merge($this->data ?? [],$data);
        $record = $this->record;
       
        $user = app($this->action)->execute($record, $data);

        $lang=app()->getLocale();
        $route=route('pages.view', ['slug' => $this->type . '_register_complete']);
        $route=LaravelLocalization::localizeUrl($route,$lang);
        
        //return redirect()->route('pages.view', ['slug' => $this->type . '_register_complete','lang'=>$lang]);
        return redirect($route);
    }

    
>>>>>>> 8055579 (.)
=======

    
>>>>>>> 8d82f8c (.)
}
