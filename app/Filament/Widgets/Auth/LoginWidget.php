<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
>>>>>>> 019e694 (.)
declare(strict_types=1);

namespace Modules\User\Filament\Widgets\Auth;

use Filament\Forms;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

class LoginWidget extends XotBaseWidget
{
    public ?array $data = [];

    protected static string $view = 'user::filament.widgets.auth.login';

    public function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('email')
                ->label(__('user::auth.email'))
                ->email()
                ->required(),

            Forms\Components\TextInput::make('password')
                ->label(__('user::auth.password'))
                ->password()
                ->required(),

            Forms\Components\Checkbox::make('remember')
                ->label(__('user::auth.remember_me')),
        ];
<<<<<<< HEAD
=======
=======
=======
declare(strict_types=1);
>>>>>>> Stashed changes

namespace Modules\User\Filament\Widgets\Auth;

use Filament\Forms;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

class LoginWidget extends XotBaseWidget
{
    public ?array $data = [];

    protected static string $view = 'user::filament.widgets.auth.login';

    public function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('email')
                ->label(__('user::auth.email'))
                ->email()
                ->required(),

            Forms\Components\TextInput::make('password')
                ->label(__('user::auth.password'))
                ->password()
                ->required(),

<<<<<<< Updated upstream
=======

namespace Modules\User\App\Filament\Widgets\Auth;

use Filament\Widgets\Widget;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginWidget extends Widget
{
    protected static string $view = 'user::widgets.auth.login-widget';

    public ?array $data = [];

    public function mount(): void
    {
        if (Auth::check()) {
            redirect()->intended(route('dashboard'));
        }

        $this->form->fill();
    }

>>>>>>> 88efd6b (.)
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('email')
                            ->label(__('user::auth.login.email'))
                            ->email()
                            ->required()
                            ->autocomplete('email')
                            ->placeholder(__('user::auth.login.email_placeholder')),

                        TextInput::make('password')
                            ->label(__('user::auth.login.password'))
                            ->password()
                            ->required()
                            ->autocomplete('current-password')
                            ->placeholder(__('user::auth.login.password_placeholder')),

                        Checkbox::make('remember')
                            ->label(__('user::auth.login.remember')),
                    ])
                    ->columns(1),
            ])
            ->statePath('data');
<<<<<<< HEAD
>>>>>>> 73101fd (.)
=======
            Forms\Components\Checkbox::make('remember')
                ->label(__('user::auth.remember_me')),
        ];
>>>>>>> Stashed changes
=======
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
    }

    public function login(): void
    {
        $data = $this->form->getState();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
>>>>>>> 019e694 (.)
        if (Auth::attempt($data)) {
            session()->regenerate();
            redirect()->intended(route('filament.admin.pages.dashboard'));
        }

        $this->addError('email', __('auth.failed'));
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 88efd6b (.)
        if (!Auth::attempt([
            'email' => $data['email'],
            'password' => $data['password'],
        ], $data['remember'] ?? false)) {
            throw ValidationException::withMessages([
                'data.email' => [__('user::auth.login.failed')],
            ]);
        }

        session()->regenerate();

        redirect()->intended(route('dashboard'));
<<<<<<< HEAD
>>>>>>> 73101fd (.)
=======
        if (Auth::attempt($data)) {
            session()->regenerate();
            redirect()->intended(route('filament.admin.pages.dashboard'));
        }

        $this->addError('email', __('auth.failed'));
>>>>>>> Stashed changes
=======
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
    }
}
