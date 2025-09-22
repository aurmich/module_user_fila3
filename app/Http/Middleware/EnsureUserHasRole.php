<?php

<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> 079c9da7 (.)
namespace Modules\User\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

<<<<<<< HEAD
/**
 * Route::put('/post/{id}', function (string $id) {
 *   // ...
 * })->middleware(EnsureUserHasRole::class.':editor');
 * Route::put('/post/{id}', function (string $id) {
 *     // ...
 *})->middleware(EnsureUserHasRole::class.':editor,publisher');
 */
=======
/** 
* Route::put('/post/{id}', function (string $id) {
*   // ...
* })->middleware(EnsureUserHasRole::class.':editor');
* Route::put('/post/{id}', function (string $id) {
*     // ...
*})->middleware(EnsureUserHasRole::class.':editor,publisher');
*/
>>>>>>> 079c9da7 (.)

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
<<<<<<< HEAD
        $user = $request->user();
        // Check if user has role using Spatie Permission's hasRole method
        if (!$user || !method_exists($user, 'hasRole') || !$user->hasRole($role)) {
=======
        if (! $request->user()?->hasRole($role)) {
>>>>>>> 079c9da7 (.)
            // Redirect...
            return redirect()->route('home');
        }

        return $next($request);
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 079c9da7 (.)
