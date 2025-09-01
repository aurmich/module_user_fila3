<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets;

use Exception;
<<<<<<< HEAD
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Notifications\Notification;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
=======
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form as FilamentForm;
use Filament\Notifications\Notification;
>>>>>>> 8055579 (.)
use Illuminate\Validation\ValidationException;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

/**
 * LoginWidget: Widget di login conforme alle regole Windsurf/Xot.
 * - Estende XotBaseWidget
 * - Usa solo componenti Filament importati
 * - Validazione e sicurezza integrate
 * - Facilmente estendibile (2FA, captcha, login social)
 *
 * @property array<string, mixed>|null $data
 */
class LoginWidget extends XotBaseWidget
{
    /**
     * Blade view del widget nel modulo User.
     * IMPORTANTE: quando il widget viene usato con @livewire() direttamente nelle Blade,
     * il path deve essere senza il namespace del modulo (senza "user::").
<<<<<<< HEAD
     *
     * @see \Modules\User\docs\WIDGETS_STRUCTURE.md - Sezione B
     *
=======
     * 
     * @see \Modules\User\docs\WIDGETS_STRUCTURE.md - Sezione B
>>>>>>> 8055579 (.)
     * @var view-string
     */
    /** @phpstan-ignore-next-line property.defaultValue */
    protected static string $view = 'pub_theme::filament.widgets.auth.login';
<<<<<<< HEAD

    /**
     * Inizializza il widget quando viene montato.
=======
    
   
    /**
     * Inizializza il widget quando viene montato.
     *
     * @return void
>>>>>>> 8055579 (.)
     */
    public function mount(): void
    {
        $this->form->fill();
    }
<<<<<<< HEAD

=======
    
>>>>>>> 8055579 (.)
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
                ->required()
                ->revealable(),
            Toggle::make('remember')
                ->visible(false),
        ];
    }

    /**
     * Get the form model.
<<<<<<< HEAD
=======
     *
     * @return \Illuminate\Database\Eloquent\Model|null
>>>>>>> 8055579 (.)
     */
    protected function getFormModel(): ?\Illuminate\Database\Eloquent\Model
    {
        return null;
    }
<<<<<<< HEAD

=======
    
>>>>>>> 8055579 (.)
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

<<<<<<< HEAD
    /**
     * Handle login form submission.
=======


    /**
     * Handle login form submission.
     *
     * @return void
>>>>>>> 8055579 (.)
     */
    public function save(): void
    {
        try {
            $data = $this->form->getState();
<<<<<<< HEAD

            // Cast esplicito per type safety PHPStan
            $remember = (bool) ($data['remember'] ?? false);
            $attempt_data = Arr::only($data, ['email', 'password']);

            if (! Auth::attempt($attempt_data, $remember)) {
=======
            
            // Cast esplicito per type safety PHPStan
            $remember = (bool) ($data['remember'] ?? false);
            $attempt_data =Arr::only($data,['email','password']);
            
            if (!Auth::attempt($attempt_data, $remember)) {
>>>>>>> 8055579 (.)
                throw ValidationException::withMessages([
                    'email' => [__('user::messages.credentials_incorrect')],
                ]);
            }

            session()->regenerate();
<<<<<<< HEAD

=======
            
>>>>>>> 8055579 (.)
            Notification::make()
                ->title(__('user::messages.login_success'))
                ->success()
                ->send();
<<<<<<< HEAD

            $this->redirect(route('home'));

=======
                
            $this->redirect(route('home'));
            
>>>>>>> 8055579 (.)
        } catch (ValidationException $e) {
            Notification::make()
                ->title(__('user::messages.validation_error'))
                ->body($e->getMessage())
                ->danger()
                ->send();
<<<<<<< HEAD

            $this->form->fill();
            $this->form->saveRelationships();
            // $this->form->callAfter();

=======
                
            $this->form->fill();
            $this->form->saveRelationships();
            //$this->form->callAfter();
            
>>>>>>> 8055579 (.)
            foreach ($e->errors() as $field => $messages) {
                $this->form->getComponent($field)?->getContainer()->getParentComponent()?->getStatePath()
                    ? $this->addError($field, implode(' ', $messages))
                    : $this->addError('email', implode(' ', $messages));
            }
<<<<<<< HEAD

        } catch (Exception $e) {
            report($e);

=======
            
        } catch (Exception $e) {
            report($e);
            
>>>>>>> 8055579 (.)
            Notification::make()
                ->title(__('user::messages.login_error'))
                ->body(__('user::messages.login_error'))
                ->danger()
                ->send();
<<<<<<< HEAD

            $this->form->fill();
            $this->form->saveRelationships();
            // $this->form->callAfter();

            $this->addError('email', __('user::messages.login_error'));
        }
    }
=======
                
            $this->form->fill();
            $this->form->saveRelationships();
            //$this->form->callAfter();
            
            $this->addError('email', __('user::messages.login_error'));
        }
    }
    

>>>>>>> 8055579 (.)
}
