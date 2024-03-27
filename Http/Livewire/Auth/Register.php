<?php

declare(strict_types=1);

namespace Modules\User\Http\Livewire\Auth;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Modules\User\Models\User;
use Modules\Xot\Services\FileService;

class Register extends Component
{
    public string $name = '';

    public string $email = '';

    public string $password = '';

    public string $passwordConfirmation = '';

    /**
     * Execute the action.
     */
    // public function register(): \Livewire\Features\SupportRedirects\Redirector
    public function register(): RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $this->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:user.users'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
        ]);

        $user = User::create([
            'email' => $this->email,
            'name' => $this->name,
            'password' => Hash::make($this->password),
        ]);

        event(new Registered($user));

        Auth::login($user, true);

        return redirect()->intended(route('home'));
        // return redirect(route('home'));
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        FileService::viewCopy('user::livewire.auth.register', 'pub_theme::livewire.auth.register');
        FileService::viewCopy('user::layouts.auth', 'pub_theme::layouts.auth');
        FileService::viewCopy('user::layouts.base', 'pub_theme::layouts.base');

        return view('pub_theme::livewire.auth.register')
            ->extends('pub_theme::layouts.auth');
    }
}