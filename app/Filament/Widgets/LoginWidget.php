<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Exception;
use Illuminate\Http\RedirectResponse;
use Livewire\Attributes\Layout;

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

    public function getFormSchema(): array
    {
        return [
            TextInput::make('email')
                ->email()
                ->required()
                ->label(__('Email'))
                ->placeholder(__('Inserisci la tua email'))
                ->suffixIcon('heroicon-m-envelope')
                ->autofocus()
                ->live()
                ->afterStateUpdated(fn ($state) => $this->validateEmail($state))
                ->dehydrated(),

            TextInput::make('password')
                ->password()
                ->required()
                ->label(__('Password'))
                ->placeholder(__('Inserisci la tua password'))
                ->suffixIcon('heroicon-m-key')
                ->revealable()
                ->minLength(8)
                ->maxLength(255)
                ->dehydrated(),

            Checkbox::make('remember')
                ->label(__('Ricordami'))
                ->default(false)
                ->dehydrated(),
        ];
    }

    public function authenticate(): void
    {
        try {
            $this->validate();
            $this->rateLimit(5);
            
            $data = $this->form->getState();
            if (!Auth::attempt([
                'email' => $data['email'],
                'password' => $data['password']
            ], $data['remember'] ?? false)) {
                throw ValidationException::withMessages([
                    'email' => [__('Credenziali non valide.')],
                ]);
            }
            
            redirect(route('filament.admin.pages.dashboard'))->send();
        } catch (ValidationException $e) {
            $this->addError('email', $e->getMessage());
        } catch (Exception $e) {
            $this->addError('email', __('Si è verificato un errore. Riprova più tardi.'));
            report($e);
        }
    }

    protected function validateEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->addError('email', __('Inserisci un indirizzo email valido.'));
        }
    }

    public function save(): void
    {
        $this->authenticate();
    }
}
