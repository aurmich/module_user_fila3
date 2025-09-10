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
        $userType = $request->user()?->type;
<<<<<<< HEAD

        $userTypeValue = null;
        if ($userType instanceof \BackedEnum) {
            $userTypeValue = $userType->value;
        } elseif (is_string($userType)) {
            $userTypeValue = $userType;
        }

        if ($userTypeValue !== $type) {
=======
        $userTypeValue = $userType;
        if($userTypeValue instanceof \BackedEnum){
            $userTypeValue = $userTypeValue->value;
        }
        
        if ($userTypeValue !== $type) {
            // Redirect...
>>>>>>> d95d1a6 (.)
            return redirect()->route('home');
        }

        return $next($request);
    }
}