<?php

declare(strict_types=1);

namespace Modules\User\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{
    public function mount(): void
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        redirect()->route('login');
    }

    public function render()
    {
        return view('user::livewire.auth.logout');
    }
}
