<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\User\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
=======
namespace Modules\User\App\Http\Livewire\Auth;

use Livewire\Component;
>>>>>>> aurmich/dev

class Logout extends Component
{
    public function mount(): void
    {
<<<<<<< HEAD
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        redirect()->route('login');
=======
        auth()->logout();
        session()->invalidate();
        session()->regenerateToken();
        redirect()->route('home')->send();
>>>>>>> aurmich/dev
    }

    public function render()
    {
<<<<<<< HEAD
        return view('user::livewire.auth.logout');
=======
        return view('livewire.auth.logout');
>>>>>>> aurmich/dev
    }
}
