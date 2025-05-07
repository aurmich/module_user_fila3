<?php

declare(strict_types=1);

namespace Modules\User\App\Http\Livewire\Auth;

use Livewire\Component;

class Logout extends Component
{
    public function mount(): void
    {
        auth()->logout();
        session()->invalidate();
        session()->regenerateToken();
        redirect()->route('home')->send();
    }

    public function render()
    {
        return view('livewire.auth.logout');
    }
}
