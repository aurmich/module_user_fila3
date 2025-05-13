<?php

/**
 * @see https://github.com/DutchCodingCompany/filament-socialite/blob/main/routes/web.php
 */

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Modules\Xot\Datas\XotData;
<<<<<<< HEAD
use Modules\User\Http\Controllers\Auth\LogoutController;
=======
>>>>>>> ba18491 (.)

require 'socialite.php';


if (XotData::make()->register_pub_theme) {
    // require 'web_tall.php';
} else {
    Route::get('/login', static fn () => redirect('/admin/login'))->name('login');
}

<<<<<<< HEAD
// Route::post('/logout', LogoutController::class)->name('logout');
=======
>>>>>>> ba18491 (.)
//Route::get('/upgrade', 'UpgradeController');
