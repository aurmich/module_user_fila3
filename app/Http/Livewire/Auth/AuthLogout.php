<?php

declare(strict_types=1);

namespace Modules\User\Http\Livewire\Auth;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
=======
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
>>>>>>> 8055579 (.)
=======
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
>>>>>>> 8d82f8c (.)

class AuthLogout extends Component
{
    public function mount(): void
    {
        Auth::logout();
    }

    public function render(): \Illuminate\Contracts\View\View
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $view = 'livewire.auth.logout';
        // @phpstan-ignore-next-line
        if (! view()->exists($view)) {
            throw new \Exception("View $view not found");
        }
        $view_params = [];

        return view($view, $view_params);
=======
        $view='livewire.auth.logout';
        //@phpstan-ignore-next-line
        if(!view()->exists($view)){
            throw new \Exception("View $view not found");
        }
        $view_params=[];
        return view($view,$view_params);
>>>>>>> 8055579 (.)
=======
        $view='livewire.auth.logout';
        //@phpstan-ignore-next-line
        if(!view()->exists($view)){
            throw new \Exception("View $view not found");
        }
        $view_params=[];
        return view($view,$view_params);
>>>>>>> 8d82f8c (.)
    }
}
