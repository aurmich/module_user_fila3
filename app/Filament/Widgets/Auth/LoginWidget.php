<?php
declare(strict_types=1);

namespace Modules\User\Filament\Widgets\Auth;

use Filament\Forms;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\ComponentContainer;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

/**
<<<<<<< HEAD
 * 
 * LoginWidget: Widget di login conforme alle regole Windsurf/Xot.
 * - Estende XotBaseWidget
 * - Usa solo componenti Filament importati
 * - Validazione e sicurezza integrate
 * - Facilmente estendibile (2FA, captcha, login social)
 *
 * @property array<string, mixed>|null $data
=======
>>>>>>> aurmich/dev
 * @property ComponentContainer $form
 */
class LoginWidget extends XotBaseWidget
{
    public ?array $data = [];

<<<<<<< HEAD
    /**
     * Blade view del widget nel modulo User.
     * IMPORTANTE: quando il widget viene usato con @livewire() direttamente nelle Blade,
     * il path deve essere senza il namespace del modulo (senza "user::").
     * 
     * @see \Modules\User\docs\WIDGETS_STRUCTURE.md - Sezione B
     * @var view-string
     * @phpstan-ignore property.defaultValue 
     */
    protected static string $view = 'pub_theme::filament.widgets.auth.login';
=======
    protected static string $view = 'user::filament.widgets.auth.login';
>>>>>>> aurmich/dev

    public function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('email')
<<<<<<< HEAD
=======
                ->label(__('user::auth.email'))
>>>>>>> aurmich/dev
                ->email()
                ->required(),

            Forms\Components\TextInput::make('password')
<<<<<<< HEAD
=======
                ->label(__('user::auth.password'))
>>>>>>> aurmich/dev
                ->password()
                ->required(),

            Forms\Components\Checkbox::make('remember')
<<<<<<< HEAD
                ,
=======
                ->label(__('user::auth.remember_me')),
>>>>>>> aurmich/dev
        ];
    }

    public function login(): void
    {
        $data = $this->form->getState();

<<<<<<< HEAD
        $credentials = [
            'email' => is_string($data['email'] ?? null) ? $data['email'] : '',
            'password' => is_string($data['password'] ?? null) ? $data['password'] : '',
        ];
        
        if (Auth::attempt($credentials)) {
            session()->regenerate();
            redirect()->intended('/');
=======
        if (Auth::attempt($data)) {
            session()->regenerate();
            redirect()->intended(route('filament.admin.pages.dashboard'));
>>>>>>> aurmich/dev
        }

        $this->addError('email', __('auth.failed'));
    }
}
