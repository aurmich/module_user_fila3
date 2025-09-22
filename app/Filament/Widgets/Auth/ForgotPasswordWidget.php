<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets\Auth;

<<<<<<< HEAD
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextInput as FormsTextInput;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Password;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
=======
use Filament\Forms\Form;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Password;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Filament\Forms\Components\TextInput as FormsTextInput;
>>>>>>> 079c9da7 (.)

/**
 * @property ComponentContainer $form
 */
class ForgotPasswordWidget extends XotBaseWidget
{
    protected static string $view = 'user::widgets.auth.forgot-password-widget';

    /**
     * Get the form schema for this widget.
     *
     * @return array<string, \Filament\Forms\Components\Component>
     */
<<<<<<< HEAD
    #[\Override]
=======
>>>>>>> 079c9da7 (.)
    public function getFormSchema(): array
    {
        return [
            'email' => TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(255),
        ];
    }

<<<<<<< HEAD
    #[\Override]
    public function form(Form $form): Form
    {
        return $form->schema([
            Section::make()
                ->schema([
                    TextInput::make('email')
                        ->email()
                        ->required()
                        ->maxLength(255),
                ])
                ->columns(1),
        ])->statePath('data');
=======
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(255),
                    ])
                    ->columns(1),
            ])
            ->statePath('data');
>>>>>>> 079c9da7 (.)
    }

    public function sendResetLink(): void
    {
        $data = $this->form->getState();

<<<<<<< HEAD
        $status = Password::sendResetLink(['email' => $data['email']]);
=======
        $status = Password::sendResetLink(
            ['email' => $data['email']]
        );
>>>>>>> 079c9da7 (.)

        if ($status === Password::RESET_LINK_SENT) {
            session()->flash('status', __($status));
        } else {
            $this->addError('email', __($status));
        }
    }
}
