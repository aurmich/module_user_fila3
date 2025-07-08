<?php
declare(strict_types=1);

namespace Modules\User\Filament\Widgets\Auth;

use Filament\Forms;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\ComponentContainer;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

/**
 * @property ComponentContainer $form
 */
class LoginWidget extends XotBaseWidget
{
    public ?array $data = [];

<<<<<<< HEAD
    protected static string $view = 'user::filament.widgets.auth.login';
=======
    protected static string $view = 'pub_theme::filament.widgets.auth.login';
>>>>>>> aurmich/dev

    public function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('email')
<<<<<<< HEAD
                ->label(__('user::auth.email'))
=======
>>>>>>> aurmich/dev
                ->email()
                ->required(),

            Forms\Components\TextInput::make('password')
<<<<<<< HEAD
                ->label(__('user::auth.password'))
=======
>>>>>>> aurmich/dev
                ->password()
                ->required(),

            Forms\Components\Checkbox::make('remember')
<<<<<<< HEAD
                ->label(__('user::auth.remember_me')),
=======
                ,
>>>>>>> aurmich/dev
        ];
    }

    public function login(): void
    {
        $data = $this->form->getState();

        if (Auth::attempt($data)) {
            session()->regenerate();
            redirect()->intended(route('filament.admin.pages.dashboard'));
        }

        $this->addError('email', __('auth.failed'));
    }
}
