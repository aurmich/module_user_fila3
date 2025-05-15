<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets\Auth;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
<<<<<<< Updated upstream
<<<<<<< HEAD
use Filament\Forms;
=======
>>>>>>> 73101fd (.)
=======
use Filament\Forms;
>>>>>>> Stashed changes

class ResetPasswordWidget extends BaseAuthWidget
{
    protected static string $view = 'user::widgets.auth.reset-password-widget';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('email')
<<<<<<< Updated upstream
<<<<<<< HEAD
                            ->email()
                            ->required()
                            ->autocomplete('email'),

                        TextInput::make('password')
=======
                            ->label(__('user::auth.reset-password.email'))
=======
>>>>>>> Stashed changes
                            ->email()
                            ->required()
                            ->autocomplete('email'),

                        TextInput::make('password')
<<<<<<< Updated upstream
                            ->label(__('user::auth.reset-password.password'))
>>>>>>> 73101fd (.)
=======
>>>>>>> Stashed changes
                            ->password()
                            ->required()
                            ->minLength(8)
                            ->same('password_confirmation')
<<<<<<< Updated upstream
<<<<<<< HEAD
                            ->autocomplete('new-password'),

                        TextInput::make('password_confirmation')
                            ->password()
                            ->required()
                            ->autocomplete('new-password'),
=======
                            ->autocomplete('new-password')
                            ->placeholder(__('user::auth.reset-password.password_placeholder')),
=======
                            ->autocomplete('new-password'),
>>>>>>> Stashed changes

                        TextInput::make('password_confirmation')
                            ->password()
                            ->required()
<<<<<<< Updated upstream
                            ->autocomplete('new-password')
                            ->placeholder(__('user::auth.reset-password.password_confirmation_placeholder')),
>>>>>>> 73101fd (.)
=======
                            ->autocomplete('new-password'),
>>>>>>> Stashed changes
                    ])
                    ->columns(1),
            ])
            ->statePath('data');
    }

    public function resetPassword(): void
    {
        $data = $this->form->getState();

        $status = Password::reset(
            [
                'email' => $data['email'],
                'password' => $data['password'],
                'password_confirmation' => $data['password_confirmation'],
                'token' => request()->route('token'),
            ],
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                ])->save();
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            session()->flash('status', __($status));
            redirect()->route('login');
        } else {
            $this->addError('email', __($status));
        }
    }
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
>>>>>>> Stashed changes

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('password')
                ->password()
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('password_confirmation')
                ->password()
                ->required()
                ->maxLength(255)
                ->same('password'),
        ];
    }
<<<<<<< Updated upstream
=======
>>>>>>> 73101fd (.)
=======
>>>>>>> Stashed changes
}
