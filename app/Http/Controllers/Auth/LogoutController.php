<?php

<<<<<<< Updated upstream
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 73101fd (.)
=======
declare(strict_types=1);

>>>>>>> Stashed changes
/**
 * Logs out the current user and redirects to the home page.
 *
 * @return \Illuminate\Http\RedirectResponse
 */

<<<<<<< Updated upstream
<<<<<<< HEAD
namespace Modules\User\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    /**
     * Esegue il logout dell'utente.
     */
    public function __invoke(): RedirectResponse
    {
        // Esegui il logout
        Auth::logout();

        // Invalida la sessione
        Session::invalidate();

        // Rigenera il token CSRF
        Session::regenerateToken();

        // Redirect alla home
        return redirect()->route('home');
=======
declare(strict_types=1);

=======
>>>>>>> Stashed changes
namespace Modules\User\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    /**
     * Esegue il logout dell'utente.
     */
    public function __invoke(): RedirectResponse
    {
        // Esegui il logout
        Auth::logout();

<<<<<<< Updated upstream
        return redirect(route('home'));
>>>>>>> 73101fd (.)
=======
        // Invalida la sessione
        Session::invalidate();

        // Rigenera il token CSRF
        Session::regenerateToken();

        // Redirect alla home
        return redirect()->route('home');
>>>>>>> Stashed changes
    }
}
