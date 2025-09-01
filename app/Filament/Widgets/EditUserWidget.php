<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets;

use Filament\Forms\Form;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Widgets\Widget;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
=======
use Illuminate\Support\Arr;
>>>>>>> 8d82f8c (.)
use Illuminate\Support\Str;
use Filament\Widgets\Widget;
use Illuminate\Http\Request;
use Webmozart\Assert\Assert;
use Modules\Xot\Datas\XotData;
use Livewire\Attributes\Validate;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Contracts\UserContract;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Illuminate\Support\Facades\Log;

/**
 * EditUserWidget: Widget generico per la modifica dati utente.
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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Contracts\UserContract;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Illuminate\Support\Facades\Log;

/**
 * EditUserWidget: Widget generico per la modifica dati utente.
 * 
>>>>>>> 8055579 (.)
=======
 * 
>>>>>>> 8d82f8c (.)
 * Segue il pattern di delegazione del RegistrationWidget:
 * - Raccoglie i dati dal form
 * - Determina dinamicamente la risorsa, il modello e l'action da eseguire
 * - Delega la logica di salvataggio a una UpdateAction specifica del modulo
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * Il widget è completamente generico e riutilizzabile per qualsiasi tipo di utente.
 *
=======
 * 
 * Il widget è completamente generico e riutilizzabile per qualsiasi tipo di utente.
 * 
>>>>>>> 8055579 (.)
=======
 * 
 * Il widget è completamente generico e riutilizzabile per qualsiasi tipo di utente.
 * 
>>>>>>> 8d82f8c (.)
 * @property-read string $type
 * @property-read string $resource
 * @property-read string $model
 * @property-read string $action
 * @property-read Model $record
 * @property array|null $data
 */
class EditUserWidget extends XotBaseWidget
{
    /** @var array<string, mixed>|null */
    public ?array $data = [];
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 8d82f8c (.)
    /** @var array<string, int|null>|int|string */
    protected int | string | array $columnSpan = 'full';
    
    public string $type;
    public string $resource;
    public string $model;
    public string $action;
<<<<<<< HEAD

=======
    
    /** @var array<string, int|null>|int|string */
    protected int | string | array $columnSpan = 'full';
    
    public string $type;
    public string $resource;
    public string $model;
    public string $action;
>>>>>>> 8055579 (.)
=======
>>>>>>> 8d82f8c (.)
    public Model $record;

    /**
     * @phpstan-ignore-next-line
     */
    protected static string $view = 'pub_theme::filament.widgets.edit-user';

    /**
     * Initialize the widget with user type and optional user ID.
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 8d82f8c (.)
     *
     * @param string $type
     * @param int|null $userId
     * @return void
<<<<<<< HEAD
>>>>>>> 8055579 (.)
=======
>>>>>>> 8d82f8c (.)
     */
    public function mount(string $type, ?int $userId = null): void
    {
        $this->type = $type;
        $this->resource = XotData::make()->getUserResourceClassByType($type);
        $this->model = $this->resource::getModel();
        $this->action = Str::of($this->model)->replace('\Models\\', '\Actions\\')->append('\UpdateUserAction')->toString();
<<<<<<< HEAD
<<<<<<< HEAD

        $record = $this->getFormModel($userId);
        $data = $this->getFormFill();

=======
        
        $record = $this->getFormModel($userId);
        $data = $this->getFormFill();
        
>>>>>>> 8055579 (.)
=======
        
        $record = $this->getFormModel($userId);
        $data = $this->getFormFill();
        
>>>>>>> 8d82f8c (.)
        $this->form->fill($data);
        $this->form->model($record);
        $this->data = $data;
        $this->record = $record;
    }

    /**
     * Ottiene il modello per il form.
     * Se viene fornito un userId, carica quell'utente, altrimenti usa l'utente autenticato.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @param int|null $userId
     * @return Model
>>>>>>> 8055579 (.)
=======
     *
     * @param int|null $userId
     * @return Model
>>>>>>> 8d82f8c (.)
     */
    protected function getFormModel(?int $userId = null): Model
    {
        if ($userId) {
            $user = $this->model::findOrFail($userId);
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 8055579 (.)
=======
>>>>>>> 8d82f8c (.)
            return $user;
        }

        // Se non è specificato un userId, usa l'utente correntemente autenticato
        $currentUser = Auth::user();
        if ($currentUser && $currentUser instanceof $this->model) {
            return $currentUser;
        }

        // Fallback: cerca un utente del tipo corretto associato all'utente autenticato
        if ($currentUser) {
            $user = $this->model::where('user_id', $currentUser->id)->first();
            if ($user) {
                return $user;
            }
        }

        // Ultimo fallback: nuovo modello
        return app($this->model);
    }

    /**
     * Ottiene i dati per il riempimento del form.
     *
     * @return array<string, mixed>
     */
    public function getFormFill(): array
    {
        $model = $this->record ?? $this->getFormModel();
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8055579 (.)
=======
        
>>>>>>> 8d82f8c (.)
        // Se il modello ha un ID, significa che è stato trovato nel database
        if ($model->exists) {
            try {
                return $model->toArray();
            } catch (\Exception $e) {
                // Se toArray() fallisce (problemi con enum), usa getAttributes()
<<<<<<< HEAD
<<<<<<< HEAD
                Log::warning("Errore in toArray() per modello {$this->model}: ".$e->getMessage());
                $attributes = $model->getAttributes();

=======
                Log::warning("Errore in toArray() per modello {$this->model}: " . $e->getMessage());
                $attributes = $model->getAttributes();
                
>>>>>>> 8055579 (.)
=======
                Log::warning("Errore in toArray() per modello {$this->model}: " . $e->getMessage());
                $attributes = $model->getAttributes();
                
>>>>>>> 8d82f8c (.)
                // Gestisci specificamente gli enum se presenti
                if (isset($attributes['type']) && ($model->type ?? null) instanceof \BackedEnum) {
                    $attributes['type'] = $model->type->value;
                }
<<<<<<< HEAD
<<<<<<< HEAD

                return $attributes;
            }
        }

=======
                
                return $attributes;
            }
        }
        
>>>>>>> 8055579 (.)
=======
                
                return $attributes;
            }
        }
        
>>>>>>> 8d82f8c (.)
        // Se è un nuovo modello, restituisci solo i campi fillable con valori null
        $fillable = $model->getFillable();
        $appends = $model->getAppends();
        $fields = array_merge($fillable, $appends);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8055579 (.)
=======
        
>>>>>>> 8d82f8c (.)
        return array_fill_keys($fields, null);
    }

    /**
     * Ottiene lo schema del form dalla resource.
     *
     * @return array<int|string, \Filament\Forms\Components\Component>
     */
    public function getFormSchema(): array
    {
        return $this->resource::getFormSchemaWidget();
    }

    /**
     * Gestisce il salvataggio delle modifiche delegando all'action specifica.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @see https://filamentphp.com/docs/3.x/forms/adding-a-form-to-a-livewire-component
=======
     * 
     * @see https://filamentphp.com/docs/3.x/forms/adding-a-form-to-a-livewire-component
     *
     * @return \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
>>>>>>> 8055579 (.)
=======
     * 
     * @see https://filamentphp.com/docs/3.x/forms/adding-a-form-to-a-livewire-component
     *
     * @return \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
>>>>>>> 8d82f8c (.)
     */
    public function updateUser(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $data = $this->form->getState();
        $record = $this->record;
<<<<<<< HEAD
<<<<<<< HEAD

=======
       
>>>>>>> 8d82f8c (.)
        // Delega l'aggiornamento all'action specifica
        $user = app($this->action)->execute($record, $data);
        
        // Notifica successo
        session()->flash('message', __('user::profile.update_success'));
        
        // Aggiorna il form con i nuovi dati
        $this->form->fill($this->getFormFill());
<<<<<<< HEAD

=======
       
        // Delega l'aggiornamento all'action specifica
        $user = app($this->action)->execute($record, $data);
        
        // Notifica successo
        session()->flash('message', __('user::profile.update_success'));
        
        // Aggiorna il form con i nuovi dati
        $this->form->fill($this->getFormFill());
        
>>>>>>> 8055579 (.)
=======
        
>>>>>>> 8d82f8c (.)
        return redirect()->back();
    }

    /**
     * Controlla se l'utente può modificare il record corrente.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return bool
>>>>>>> 8055579 (.)
=======
     *
     * @return bool
>>>>>>> 8d82f8c (.)
     */
    public function canEdit(): bool
    {
        $currentUser = Auth::user();
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8055579 (.)
=======
        
>>>>>>> 8d82f8c (.)
        // L'utente può modificare solo il proprio profilo
        return $currentUser && (
            (($currentUser->id ?? null) !== null && ($this->record->id ?? null) !== null && $currentUser->id === $this->record->id) ||
            (($currentUser->id ?? null) !== null && $currentUser->id === ($this->record->user_id ?? null))
        );
    }
}
