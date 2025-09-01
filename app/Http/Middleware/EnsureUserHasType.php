<?php

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

>>>>>>> 8055579 (.)
class EnsureUserHasType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $type): Response
    {
<<<<<<< HEAD

=======
        
>>>>>>> 8055579 (.)
        if ($request->user()?->type->value !== $type) {
            // Redirect...
            return redirect()->route('home');
        }

        return $next($request);
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 8055579 (.)
