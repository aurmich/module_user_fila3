<?php

declare(strict_types=1);

namespace Modules\User\Http\Livewire\Auth\Passwords;

use Illuminate\Support\Facades\Password;
use Livewire\Component;

class Email extends Component
{
    public string $email = '';

<<<<<<< HEAD
    public null|string $emailSentMessage = null;
=======
    public ?string $emailSentMessage = null;
>>>>>>> 079c9da7 (.)

    /**
     * Invia il link per il reset della password.
     */
    public function sendResetPasswordLink(): void
    {
        $this->validate([
            'email' => ['required', 'email'],
        ]);

        $broker = $this->broker();
        $response = $broker->sendResetLink(['email' => $this->email]);

        if ($response === Password::RESET_LINK_SENT) {
<<<<<<< HEAD
            $this->emailSentMessage = trans('user::' . $response);
            return;
        }

        $this->addError('email', trans('user::' . $response));
=======
            $this->emailSentMessage = trans('user::'.$response);
            return;
        }

        $this->addError('email', trans('user::'.$response));
>>>>>>> 079c9da7 (.)
    }

    /**
     * Get the broker to be used during password reset.
     */
    public function broker(): \Illuminate\Contracts\Auth\PasswordBroker
    {
        return Password::broker();
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
<<<<<<< HEAD
        app(\Modules\Xot\Actions\File\ViewCopyAction::class)
            ->execute('user::livewire.auth.passwords.email', 'pub_theme::livewire.auth.passwords.email');
=======
        app(\Modules\Xot\Actions\File\ViewCopyAction::class)->execute('user::livewire.auth.passwords.email', 'pub_theme::livewire.auth.passwords.email');
>>>>>>> 079c9da7 (.)
        app(\Modules\Xot\Actions\File\ViewCopyAction::class)->execute('user::layouts.auth', 'pub_theme::layouts.auth');
        app(\Modules\Xot\Actions\File\ViewCopyAction::class)->execute('user::layouts.base', 'pub_theme::layouts.base');

        /**
         * @phpstan-var view-string
         */
        $view = 'pub_theme::livewire.auth.passwords.email';

        return view($view, [
<<<<<<< HEAD
            'layout' => 'pub_theme::layouts.auth',
=======
            'layout' => 'pub_theme::layouts.auth'
>>>>>>> 079c9da7 (.)
        ]);
    }
}
