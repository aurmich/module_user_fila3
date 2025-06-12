<?php
declare(strict_types=1);

namespace Modules\User\Filament\Widgets\Auth;

use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Modules\User\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\TextInput as FormsTextInput;

class RegisterWidget extends XotBaseWidget 
{
    protected static string $view = 'user::widgets.auth.register-widget';
    
    public function getFormSchema(): array
    {
        return [
            Form\Components\TextInput::make('name')
                ->label('Nome')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('email')
                ->label('Email')
                ->email()
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('password')
                ->label('Password')
                ->password()
                ->required()
                ->minLength(8),
        ];
    }

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
