<?php
<<<<<<< Updated upstream
<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\User\Filament\Widgets\Auth;
=======

namespace Modules\User\App\Filament\Widgets\Auth;
>>>>>>> 73101fd (.)
=======
declare(strict_types=1);

namespace Modules\User\Filament\Widgets\Auth;
>>>>>>> Stashed changes

use Filament\Widgets\Widget;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Modules\User\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
<<<<<<< Updated upstream
<<<<<<< HEAD
use Filament\Forms\Components\TextInput as FormsTextInput;
=======
>>>>>>> 73101fd (.)
=======
use Filament\Forms\Components\TextInput as FormsTextInput;
>>>>>>> Stashed changes

class RegisterWidget extends Widget
{
    protected static string $view = 'user::widgets.auth.register-widget';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('name')
<<<<<<< Updated upstream
<<<<<<< HEAD
                            ->required()
                            ->maxLength(255)
                            ->autocomplete('name'),

                        TextInput::make('email')
                            ->email()
                            ->required()
                            ->unique(table: User::class)
                            ->autocomplete('email'),

                        TextInput::make('password')
                            ->password()
                            ->required()
                            ->rule(Password::default())
                            ->autocomplete('new-password'),

                        TextInput::make('password_confirmation')
                            ->password()
                            ->required()
                            ->same('password')
                            ->autocomplete('new-password'),
=======
                            ->label(__('user::auth.register.name'))
=======
>>>>>>> Stashed changes
                            ->required()
                            ->maxLength(255)
                            ->autocomplete('name'),

                        TextInput::make('email')
                            ->email()
                            ->required()
                            ->unique(table: User::class)
                            ->autocomplete('email'),

                        TextInput::make('password')
                            ->password()
                            ->required()
                            ->rule(Password::default())
                            ->autocomplete('new-password'),

                        TextInput::make('password_confirmation')
                            ->password()
                            ->required()
                            ->same('password')
<<<<<<< Updated upstream
                            ->autocomplete('new-password')
                            ->placeholder(__('user::auth.register.password_confirmation_placeholder')),
>>>>>>> 73101fd (.)
=======
                            ->autocomplete('new-password'),
>>>>>>> Stashed changes
                    ])
                    ->columns(1),
            ])
            ->statePath('data');
    }

    public function register(): void
    {
        $data = $this->form->getState();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Auth::login($user);

        redirect()->intended(route('dashboard'));
    }
}
