<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets;

use Filament\Forms\Form;
<<<<<<< HEAD
use Illuminate\Support\Arr;
=======
>>>>>>> 5856def (.)
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


class RegistrationWidget extends XotBaseWidget
{
    
    public ?array $data = [];
    protected int | string | array $columnSpan = 'full';
    public string $type;
    public string $resource;
    public string $model;
    public string $action;
<<<<<<< HEAD
    public Model $record;
    
    /**
     * @var view-string
     */
=======
>>>>>>> 5856def (.)
    protected static string $view = 'pub_theme::filament.widgets.registration';

    public function mount(string $type, Request $request): void
    {
        $this->type = $type;
<<<<<<< HEAD
        $this->resource = XotData::make()->getUserResourceClassByType($type);
        $this->model = $this->resource::getModel();
        $this->action = Str::of($this->model)->replace('\\Models\\', '\\Actions\\')->append('\\RegisterAction')->toString();
        $record = $this->getFormModel();
        $data = $this->getFormFill();
        $this->data = $data; 
        $this->form->fill($data);
        $this->form->model($record);
        $this->record = $record;
        
=======
        $this->resource = XotData::make()->getUserTypeResourceClass($type);
        $this->model = $this->resource::getModel();
        $this->action=Str::of($this->model)->replace('\Models\\', '\Actions\\')->append('\RegisterAction')->toString();
        $this->form->fill();
>>>>>>> 5856def (.)
    }

    public function getFormModel(): Model
    {
        $data = request()->all();
        $email = Arr::get($data, 'email');
        $token = Arr::get($data, 'token');

        $user = $this->model::firstWhere('email', $email);
        if ($user === null) {
            return app($this->model);
        }
        
        $remember_token = $user->remember_token;
        if ($remember_token === null) {
            $user->remember_token = Str::uuid()->toString();
            $user->save();
        }
        
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

   

    public function getFormSchema(): array
    {
        return $this->resource::getFormSchemaWidget();
    }

<<<<<<< HEAD
    /**
     * @see https://filamentphp.com/docs/3.x/forms/adding-a-form-to-a-livewire-component
     */
    public function register(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $data = $this->form->getState();
        
        $data=array_merge($this->data ?? [],$data);
        $record = $this->record;
       
        $user = app($this->action)->execute($record, $data);

        return redirect()->route('pages.view', ['slug' => $this->type . '_register_complete']);
    }

   
}
=======
    public function register()
    {
        $data = $this->form->getState();
        app($this->action)->execute($data);
        /*
        // Validazione dei dati
        $this->validate();

        // Creazione del dottore
        $doctor = \Modules\Patient\Models\Doctor::create([
            'full_name' => $data['full_name'] ?? ($data['first_name'] . ' ' . $data['last_name']),
            'email' => $data['email'] ?? '',
            'phone' => $data['phone'] ?? '',
            'certification' => $data['certification'] ?? null,
            'state' => \Modules\Patient\States\Pending::class, // Imposta lo stato iniziale
        ]);

        // Creazione del workflow di registrazione
        $workflow = \Modules\Patient\Models\DoctorRegistrationWorkflow::create([
            'doctor_id' => $doctor->id,
            'current_step' => 'personal_info_step',
            'status' => \Modules\Patient\Models\DoctorRegistrationWorkflow::STATUS_PENDING_MODERATION,
            'started_at' => now(),
            'last_interaction_at' => now(),
            'session_id' => session()->getId(),
        ]);

        // Invio email di conferma
        $this->sendConfirmationEmail($doctor);

        // Reindirizzamento alla pagina di conferma
        return redirect()->route('doctor.registration.confirmation');
        */
    }

    /**
     * Invia l'email di conferma della registrazione.
     */
    protected function sendConfirmationEmail(\Modules\Patient\Models\Doctor $doctor): void
    {
        $email = new \Modules\Notify\Emails\SpatieEmail($doctor, 'registration_pending');

        \Illuminate\Support\Facades\Mail::to($doctor->email)
            ->locale(app()->getLocale())
            ->send($email);
        session()->flash('message', 'Registrazione completata con successo. La tua richiesta è in attesa di moderazione.');
        $this->form->fill();
    }
}
>>>>>>> 5856def (.)
