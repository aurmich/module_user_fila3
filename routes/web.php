<?php

/**
 * @see https://github.com/DutchCodingCompany/filament-socialite/blob/main/routes/web.php
 */

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Modules\Xot\Datas\XotData;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::prefix('user')->group(function() {
    Route::get('/', 'UserController@index');
});
*/

// Route::domain(config('filament.domain'))
//    ->middleware(config('filament.middleware.base'))
<<<<<<< HEAD
/*
=======
>>>>>>> db74942 (.)
Route::namespace('Socialite')
    ->name('socialite.')
    ->group(
        static function (): void {
            Route::get(
                '/admin/login/{provider}',
                // 'LoginController@redirectToProvider',
                'RedirectToProviderController',
            )
                ->name('oauth.redirect');
            Route::get(
                '/sso/{provider}/callback',
                'ProcessCallbackController',
            )
                ->name('oauth.callback');
        }
    );
<<<<<<< HEAD
*/
require 'socialite.php';
=======
>>>>>>> db74942 (.)

/*
 * ..
 */

// $panel = Filament::getPanel('admin');

// Route::get('/login', $panel->getLoginRouteAction())->name('login');

/*
Route::namespace('\\')
    //->middleware($panel->getMiddleware())
    //->middleware('guest')
    ->group(function () use($panel){
        Route::get('/login', $panel->getLoginRouteAction())->name('login');
        //Route::redirect('/admin/login');
    }
    );
*/

<<<<<<< HEAD

/*
=======
>>>>>>> db74942 (.)
if (XotData::make()->register_pub_theme) {
    require 'web_tall.php';
} else {
    Route::get('/login', static fn () => redirect('/admin/login'))->name('login');
}

Route::get('/upgrade', 'UpgradeController');
<<<<<<< HEAD
*/
=======
>>>>>>> db74942 (.)
