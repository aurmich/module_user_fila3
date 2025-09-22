<?php

declare(strict_types=1);

namespace Modules\User\Http\Livewire\Auth;

<<<<<<< HEAD
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
=======
use Livewire\Component;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Event;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
>>>>>>> 079c9da7 (.)

/**
 * Componente Livewire per la gestione del logout.
 *
 * Questo componente gestisce il processo di logout in modo sicuro:
 * - Emette eventi pre e post logout
 * - Gestisce gli errori in modo robusto
 * - Mantiene un log delle operazioni
 * - Invalida e rigenera la sessione
 */
class Logout extends Component
{
    use WithRateLimiting;

    /**
     * Esegui logout, invalidazione sessione e redirect.
     * @return \Illuminate\Http\RedirectResponse|null
     */
    public function mount()
    {
        try {
            // Rate limit
            $this->rateLimit(5);

            // Ottieni l'utente prima del logout per il logging
            $user = Auth::user();

            // Emetti evento pre-logout
            Event::dispatch('auth.logout.attempting', [$user]);
<<<<<<< HEAD

            // Esegui logout
            Auth::logout();

            // Invalida e rigenera la sessione
            session()->invalidate();
            session()->regenerateToken();

            // Emetti evento post-logout
            Event::dispatch('auth.logout.successful');

=======
            
            // Esegui logout
            Auth::logout();
            
            // Invalida e rigenera la sessione
            session()->invalidate();
            session()->regenerateToken();
            
            // Emetti evento post-logout
            Event::dispatch('auth.logout.successful');
            
>>>>>>> 079c9da7 (.)
            // Log per audit
            if ($user) {
                Log::info('User logged out successfully', [
                    'user_id' => $user->id,
<<<<<<< HEAD
                    'email' => $user->email,
                ]);
            }

=======
                    'email' => $user->email
                ]);
            }
            
>>>>>>> 079c9da7 (.)
            // Redirect alla pagina di login
            return redirect()->route('login');
        } catch (\Exception $e) {
            Log::error('Logout failed', [
                'error' => $e->getMessage(),
<<<<<<< HEAD
                'user_id' => Auth::id(),
=======
                'user_id' => Auth::id()
>>>>>>> 079c9da7 (.)
            ]);

            session()->flash('error', __('Si è verificato un errore durante il logout'));
            return redirect()->back();
        }
    }

    /**
     * Renderizza il componente.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('user::livewire.auth.logout');
    }
}
