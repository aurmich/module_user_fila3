<?php
<<<<<<< Updated upstream
<<<<<<< HEAD
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
>>>>>>> 73101fd (.)
=======
            Forms\Components\Checkbox::make('remember')
                ->label(__('user::auth.remember_me')),
        ];
>>>>>>> Stashed changes
    }

    public function login(): void
    {
        $data = $this->form->getState();

<<<<<<< Updated upstream
<<<<<<< HEAD
        if (Auth::attempt($data)) {
            session()->regenerate();
            redirect()->intended(route('filament.admin.pages.dashboard'));
        }

        $this->addError('email', __('auth.failed'));
=======
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
>>>>>>> 73101fd (.)
=======
        if (Auth::attempt($data)) {
            session()->regenerate();
            redirect()->intended(route('filament.admin.pages.dashboard'));
        }

        $this->addError('email', __('auth.failed'));
>>>>>>> Stashed changes
    }
}
