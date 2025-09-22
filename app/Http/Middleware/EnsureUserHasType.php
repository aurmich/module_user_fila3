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
        $userType = $request->user()?->type;

        if ($userType instanceof \BackedEnum && $userType->value === $type) {
            return $next($request);
        }

        if (is_string($userType) && $userType === $type) {
            return $next($request);
        }

        return redirect()->route('home');
    }
}
=======
        
        if ($request->user()?->type->value !== $type) {
            // Redirect...
            return redirect()->route('home');
        }

        return $next($request);
    }
}
>>>>>>> 079c9da7 (.)
