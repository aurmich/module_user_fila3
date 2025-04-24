<?php

declare(strict_types=1);

namespace Modules\User\Http\Livewire\Auth;

<<<<<<< HEAD
use Filament\Forms\ComponentContainer;
=======
>>>>>>> 67cd443 (.)
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Xot\Actions\File\ViewCopyAction;
<<<<<<< HEAD

/**
 * Componente Livewire per la gestione del login.
 *
=======
use Filament\Forms\ComponentContainer;

/**
>>>>>>> 67cd443 (.)
 * @property ComponentContainer $form
 */
class Login extends Component implements HasForms
{
    use InteractsWithForms;

    /**
<<<<<<< HEAD
     * Regole di validazione.
     *
     * @var array<string, array<string|object>>
     */
    protected array $rules = [
=======
     * @var array<string, mixed>
     */
    protected $rules = [
>>>>>>> 67cd443 (.)
        'email' => ['required', 'email'],
        'password' => ['required'],
        'remember' => ['boolean'],
    ];

<<<<<<< HEAD
    /**
     * Email dell'utente.
     */
    public string $email = '';

    /**
     * Password dell'utente.
     */
    public string $password = '';

    /**
     * Flag per ricordare l'utente.
     */
    public bool $remember = false;

    /**
     * Inizializza il componente.
     */
=======
    public string $email = '';

    public string $password = '';

    public bool $remember = false;

>>>>>>> 67cd443 (.)
    public function mount(): void
    {
        $this->form = $this->form();
    }

<<<<<<< HEAD
    /**
     * Definisce lo schema del form.
     *
     * @return array<TextInput|Checkbox>
     */
=======
>>>>>>> 67cd443 (.)
    protected function getFormSchema(): array
    {
        return [
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
                ->label(__('Ricordami')),
        ];
    }

<<<<<<< HEAD
    /**
     * Crea il form.
     */
=======
>>>>>>> 67cd443 (.)
    public function form(): Form
    {
        return $this->makeForm()
            ->schema($this->getFormSchema());
    }

    /**
<<<<<<< HEAD
     * Esegue l'autenticazione dell'utente.
=======
     * Execute the action.
>>>>>>> 67cd443 (.)
     *
     * @return RedirectResponse|void
     */
    public function authenticate()
    {
<<<<<<< HEAD
        /** @var array{email: string, password: string, remember?: bool} $data */
        $data = $this->validate();

        // Estrai remember dal data array e assicurati che sia un booleano
        $remember = $data['remember'] ?? false;
        // Converto esplicitamente a bool per PHPStan livello 10
        $remember = (bool) $remember;
=======
        $data = $this->validate();

        // Estrai remember dal data array
        $remember = $data['remember'] ?? false;
>>>>>>> 67cd443 (.)
        unset($data['remember']);

        if (Auth::attempt($data, $remember)) {
            session()->regenerate();

            return redirect()->intended();
        }

        $this->addError('email', __('Le credenziali fornite non sono corrette.'));
    }

<<<<<<< HEAD
    /**
     * Renderizza il componente.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
=======
>>>>>>> 67cd443 (.)
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        app(ViewCopyAction::class)->execute('user::livewire.auth.login', 'pub_theme::livewire.auth.login');
        app(ViewCopyAction::class)->execute('user::layouts.auth', 'pub_theme::layouts.auth');
        app(ViewCopyAction::class)->execute('user::layouts.base', 'pub_theme::layouts.base');

        /**
         * @phpstan-var view-string
         */
        $view = 'pub_theme::livewire.auth.login';

<<<<<<< HEAD
        return view($view, [
            'layout' => 'pub_theme::layouts.auth'
        ]);
=======
        return view($view)
            ->extends('pub_theme::layouts.auth');
>>>>>>> 67cd443 (.)
    }
}
