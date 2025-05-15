<?php

<<<<<<< Updated upstream
<<<<<<< HEAD
declare(strict_types=1);

=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 73101fd (.)
=======
declare(strict_types=1);

>>>>>>> Stashed changes
=======
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
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
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
>>>>>>> 019e694 (.)
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
<<<<<<< HEAD
=======
=======
declare(strict_types=1);

=======
>>>>>>> Stashed changes
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

        // Invalida la sessione
        Session::invalidate();

        // Rigenera il token CSRF
        Session::regenerateToken();

        // Redirect alla home
        return redirect()->route('home');
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
declare(strict_types=1);

namespace Modules\User\Http\Controllers\Auth;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Modules\User\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function __invoke(): RedirectResponse
    {
        Auth::logout();

        return redirect(route('home'));
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
=======
>>>>>>> Stashed changes
    }
}
