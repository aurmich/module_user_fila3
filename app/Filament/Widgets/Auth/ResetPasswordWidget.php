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
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
use Filament\Forms;
=======
>>>>>>> 73101fd (.)
=======
use Filament\Forms;
>>>>>>> Stashed changes
=======
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
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
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
>>>>>>> 019e694 (.)
                            ->email()
                            ->required()
                            ->autocomplete('email'),

                        TextInput::make('password')
<<<<<<< HEAD
=======
=======
                            ->label(__('user::auth.reset-password.email'))
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
                            ->email()
                            ->required()
                            ->autocomplete('email'),

                        TextInput::make('password')
<<<<<<< Updated upstream
<<<<<<< Updated upstream
                            ->label(__('user::auth.reset-password.password'))
>>>>>>> 73101fd (.)
=======
>>>>>>> Stashed changes
=======
                            ->label(__('user::auth.reset-password.email'))
                            ->email()
                            ->required()
                            ->autocomplete('email')
                            ->placeholder(__('user::auth.reset-password.email_placeholder')),

                        TextInput::make('password')
                            ->label(__('user::auth.reset-password.password'))
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
=======
>>>>>>> Stashed changes
                            ->password()
                            ->required()
                            ->minLength(8)
                            ->same('password_confirmation')
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
>>>>>>> 019e694 (.)
=======
>>>>>>> Stashed changes
                            ->autocomplete('new-password'),

                        TextInput::make('password_confirmation')
                            ->password()
                            ->required()
                            ->autocomplete('new-password'),
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
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
=======
                            ->autocomplete('new-password')
                            ->placeholder(__('user::auth.reset-password.password_placeholder')),

                        TextInput::make('password_confirmation')
                            ->label(__('user::auth.reset-password.password_confirmation'))
                            ->password()
                            ->required()
                            ->autocomplete('new-password')
                            ->placeholder(__('user::auth.reset-password.password_confirmation_placeholder')),
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
=======
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
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
>>>>>>> 019e694 (.)
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
<<<<<<< HEAD
=======
<<<<<<< Updated upstream
=======
>>>>>>> 73101fd (.)
=======
>>>>>>> Stashed changes
=======
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
=======
>>>>>>> Stashed changes
}
