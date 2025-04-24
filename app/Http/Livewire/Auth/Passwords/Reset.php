<?php

declare(strict_types=1);

namespace Modules\User\Http\Livewire\Auth\Passwords;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password as PasswordRule;
use Livewire\Component;
use Webmozart\Assert\Assert;

class Reset extends Component
{
<<<<<<< HEAD
    public string $token = '';

    public string $email = '';

    public string $password = '';

    public string $passwordConfirmation = '';

=======
    public string $token;

    public string $email;

    public string $password;

    public string $passwordConfirmation;

    // ricordarsi di configurare il file auth.php
>>>>>>> 67cd443 (.)
    public function mount(string $token): void
    {
        Assert::string($email = request()->query('email', ''));
        $this->email = $email;
        $this->token = $token;
    }

    /**
<<<<<<< HEAD
     * Reimposta la password dell'utente.
     */
    public function resetPassword(): \Livewire\Features\SupportRedirects\Redirector|RedirectResponse|null
    {
=======
     * Undocumented function.
     */
    public function resetPassword(): \Livewire\Features\SupportRedirects\Redirector|RedirectResponse|null
    {
        // $messages = __('xot::validation');
>>>>>>> 67cd443 (.)
        $messages = __('user::validation');

        $this->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => ['required', 'same:passwordConfirmation', PasswordRule::defaults()],
        ], $messages);

        $response = $this->broker()->reset(
            [
                'token' => $this->token,
                'email' => $this->email,
                'password' => $this->password,
            ],
            function ($user, $password): void {
                $user->password = Hash::make($password);
<<<<<<< HEAD
                $user->setRememberToken(Str::random(60));
=======

                $user->setRememberToken(Str::random(60));

>>>>>>> 67cd443 (.)
                $user->save();

                event(new PasswordReset($user));

                $this->guard()->login($user);
            }
        );

        /* @phpstan-ignore argument.type */
        Assert::string($response_lang = trans($response));

        if ($response === Password::PASSWORD_RESET) {
            session()->flash($response_lang);
<<<<<<< HEAD
=======

>>>>>>> 67cd443 (.)
            return redirect(route('home'));
        }

        $this->addError('email', $response_lang);
<<<<<<< HEAD
=======

>>>>>>> 67cd443 (.)
        return null;
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
        app(\Modules\Xot\Actions\File\ViewCopyAction::class)->execute('user::livewire.auth.passwords.reset', 'pub_theme::livewire.auth.passwords.reset');
        app(\Modules\Xot\Actions\File\ViewCopyAction::class)->execute('user::layouts.auth', 'pub_theme::layouts.auth');
        app(\Modules\Xot\Actions\File\ViewCopyAction::class)->execute('user::layouts.base', 'pub_theme::layouts.base');

        /**
         * @phpstan-var view-string
         */
        $view = 'pub_theme::livewire.auth.passwords.reset';

<<<<<<< HEAD
        return view($view, [
            'layout' => 'pub_theme::layouts.auth'
        ]);
=======
        return view($view)
            ->extends('pub_theme::layouts.auth');
>>>>>>> 67cd443 (.)
    }

    /**
     * Get the guard to be used during password reset.
     */
    protected function guard(): \Illuminate\Contracts\Auth\StatefulGuard
    {
        return Auth::guard();
    }
}
