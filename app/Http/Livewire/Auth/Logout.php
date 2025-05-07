<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1db86dc (.)
namespace Modules\User\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
=======
namespace Modules\User\App\Http\Livewire\Auth;

use Livewire\Component;
>>>>>>> aurmich/dev
=======
>>>>>>> 1db86dc (.)

class Logout extends Component
{
    public function mount(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1db86dc (.)
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        redirect()->route('login');
<<<<<<< HEAD
=======
        auth()->logout();
        session()->invalidate();
        session()->regenerateToken();
        redirect()->route('home')->send();
>>>>>>> aurmich/dev
=======
>>>>>>> 1db86dc (.)
    }

    public function render()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return view('user::livewire.auth.logout');
=======
        return view('livewire.auth.logout');
>>>>>>> aurmich/dev
=======
        return view('user::livewire.auth.logout');
>>>>>>> 1db86dc (.)
    }
}
