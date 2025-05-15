<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets;

use Filament\Forms\Components\TextInput;
<<<<<<< HEAD
use Filament\Forms\Components\Toggle;
=======
use Filament\Forms\Components\Checkbox;
>>>>>>> 73101fd (.)
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Exception;
use Illuminate\Http\RedirectResponse;
use Livewire\Attributes\Layout;
<<<<<<< HEAD
use Filament\Forms\Components\TextInput as FormsTextInput;
use Filament\Forms\Components\Checkbox as FormsCheckbox;
=======
>>>>>>> 73101fd (.)

/**
 * LoginWidget: Widget di login conforme alle regole Windsurf/Xot.
 * - Estende XotBaseWidget
 * - Usa solo componenti Filament importati
 * - Validazione e sicurezza integrate
 * - Facilmente estendibile (2FA, captcha, login social)
 *
 * @property-read static string $view La view del widget segue il pattern {module}::filament.widgets.{type}
 */

class LoginWidget extends XotBaseWidget
{
    /**
     * Blade view del widget nel modulo User.
     * IMPORTANTE: quando il widget viene usato con @livewire() direttamente nelle Blade,
     * il path deve essere senza il namespace del modulo (senza "user::").
     * 
     * @see \Modules\User\docs\WIDGETS_STRUCTURE.md - Sezione B
     */
    protected static string $view = 'user::filament.widgets.login';
    
    protected int | string | array $columnSpan = 'full';
    
    /**
     * Dati del form per il login
     */
    public ?array $data = [];

    /**
     * Inizializza il widget quando viene montato.
     */
    public function mount(): void
    {
        $this->form->fill();
    }

<<<<<<< Updated upstream
<<<<<<< HEAD
    /**
     * Definisce lo schema del form di login.
     *
     * @return array<string, \Filament\Forms\Components\Component>
=======


=======
>>>>>>> Stashed changes
    /**
     * Definisce lo schema del form con i suoi campi.
>>>>>>> 73101fd (.)
     */
    public function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
            'email' => TextInput::make('email')
                ->email()
                ->required()
                ->autofocus(),
            'password' => TextInput::make('password')
                ->password()
                ->required(),
            'remember' => Toggle::make('remember')
                ->label('Ricordami'),
=======
            TextInput::make('email')
                ->email()
                ->required()
                ->label(__('Email'))
                ->placeholder(__('Inserisci la tua email'))
                ->suffixIcon('heroicon-m-envelope'),

            TextInput::make('password')
                ->password()
                ->required()
                ->label(__('Password'))
                ->placeholder(__('Inserisci la tua password'))
                ->suffixIcon('heroicon-m-key'),

            Checkbox::make('remember')
                ->label(__('Ricordami'))
                ->default(false),
>>>>>>> 73101fd (.)
        ];
    }

    public function save(): void
    {
        try {
            $data = $this->form->getState();
            
            if (!Auth::attempt([
                'email' => $data['email'],
                'password' => $data['password']
            ], $data['remember'] ?? false)) {
                throw ValidationException::withMessages([
                    'email' => [__('Le credenziali fornite non sono corrette.')],
                ]);
            }

            session()->regenerate();
            
            redirect()->intended(route('home'));
        } catch (ValidationException $e) {
            $this->addError('email', $e->getMessage());
        } catch (Exception $e) {
            report($e);
            $this->addError('email', __('Si è verificato un errore durante il login. Riprova più tardi.'));
        }
    }
}
