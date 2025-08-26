<?php

namespace Modules\User\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/** 
* Route::put('/post/{id}', function (string $id) {
*   // ...
* })->middleware(EnsureUserHasRole::class.':editor');
* Route::put('/post/{id}', function (string $id) {
*     // ...
*})->middleware(EnsureUserHasRole::class.':editor,publisher');
*/

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
        if ($request->user()?->type->value !== $type) {
            // Redirect...
=======
        $user = $request->user();
        $userType = $user?->type ?? null;
        $actualType = is_object($userType) && $userType instanceof \BackedEnum ? $userType->value : (is_string($userType) ? $userType : null);
        if ($actualType !== $type) {
>>>>>>> 4f6d2d5 (.)
            return redirect()->route('home');
        }

        return $next($request);
    }
}