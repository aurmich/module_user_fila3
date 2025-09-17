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
<<<<<<< HEAD
        if ($userType instanceof \Modules\User\Enums\UserType && $userType->value == $type) {
            // Redirect...
=======
       
        if ($userType instanceof \BackedEnum && $userType->value == $type) {
>>>>>>> 2cca053 (.)
=======
        if ($userType instanceof \Modules\User\Enums\UserType && $userType->value == $type) {
            // Redirect...
>>>>>>> ed0944e (.)
            return $next($request);
        }

        if(is_string($userType) && $userType == $type){
            return $next($request);
        }
        
        return redirect()->route('home');
    }
}
