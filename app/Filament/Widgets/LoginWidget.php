<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets;

use Exception;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form as FilamentForm;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

/**
 * LoginWidget: Widget di login conforme alle regole Windsurf/Xot.
 * - Estende XotBaseWidget
 * - Usa solo componenti Filament importati
 * - Validazione e sicurezza integrate
 * - Facilmente estendibile (2FA, captcha, login social)
 *
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
 * @property-read static string $view La view del widget segue il pattern {module}::filament.widgets.{type}
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
 * @property array<string, mixed>|null $data
 */
class LoginWidget extends XotBaseWidget
{
    /**
     * Blade view del widget nel modulo User.
     * IMPORTANTE: quando il widget viene usato con @livewire() direttamente nelle Blade,
     * il path deve essere senza il namespace del modulo (senza "user::").
     * 
     * @see \Modules\User\docs\WIDGETS_STRUCTURE.md - Sezione B
     * @var view-string
     */
    protected static string $view = 'user::filament.widgets.login';
    
   
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
   
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
    /**
     * Inizializza il widget quando viene montato.
     *
     * @return void
     */
    public function mount(): void
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        //$this->form = $this->makeForm();
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
        $this->form->fill();
    }
    
    /**
     * Get the form schema for the login form.
     *
     * @return array<int, \Filament\Forms\Components\Component>
     */
    public function getFormSchema(): array
    {
        return [
            TextInput::make('email')
                ->email()
                ->required()
                ->autofocus(),
            TextInput::make('password')
                ->password()
                ->required(),
<<<<<<< HEAD
            Toggle::make('remember')
            ->visible(false),
=======
<<<<<<< HEAD
            Toggle::make('remember')
            ->visible(false),
=======
            Toggle::make('remember'),
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
        ];
    }

    /**
     * Get the form model.
     *
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Model|null
=======
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Model|null
=======
     * @return \Illuminate\Database\Eloquent\Model|string|null
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
     */
    protected function getFormModel(): ?\Illuminate\Database\Eloquent\Model
    {
        return null;
    }
    
    /**
     * Get the form fill data.
     *
     * @return array<string, mixed>
     */
    public function getFormFill(): array
    {
        return [
            'email' => old('email'),
            'remember' => true,
        ];
    }



    /**
     * Handle login form submission.
     *
     * @return void
     */
    public function save(): void
    {
        try {
            $data = $this->form->getState();
            
            // Cast esplicito per type safety PHPStan
            $remember = (bool) ($data['remember'] ?? false);
            
            if (!Auth::attempt([
                'email' => (string) $data['email'],
                'password' => (string) $data['password']
            ], $remember)) {
                throw ValidationException::withMessages([
                    'email' => [__('Le credenziali fornite non sono corrette.')],
                ]);
            }

            session()->regenerate();
            
            Notification::make()
                ->title('Accesso effettuato con successo')
                ->success()
                ->send();
                
            $this->redirect(route('home'));
            
        } catch (ValidationException $e) {
            Notification::make()
                ->title('Errore di validazione')
                ->body($e->getMessage())
                ->danger()
                ->send();
                
            $this->form->fill();
            $this->form->saveRelationships();
            //$this->form->callAfter();
            
            foreach ($e->errors() as $field => $messages) {
                $this->form->getComponent($field)?->getContainer()->getParentComponent()?->getStatePath()
                    ? $this->addError($field, implode(' ', $messages))
                    : $this->addError('email', implode(' ', $messages));
            }
            
        } catch (Exception $e) {
            report($e);
            
            Notification::make()
                ->title('Errore durante il login')
                ->body(__('Si è verificato un errore durante il login. Riprova più tardi.'))
                ->danger()
                ->send();
                
            $this->form->fill();
            $this->form->saveRelationships();
<<<<<<< HEAD
            //$this->form->callAfter();
=======
<<<<<<< HEAD
            //$this->form->callAfter();
=======
            $this->form->callAfter();
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
            
            $this->addError('email', __('Si è verificato un errore durante il login. Riprova più tardi.'));
        }
    }
    

}
