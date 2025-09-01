<?php

/**
 * @see https://github.com/DutchCodingCompany/filament-socialite/blob/main/routes/web.php
 */

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use Modules\User\Http\Controllers\Auth\LogoutController;
use Modules\Xot\Datas\XotData;

require 'socialite.php';

=======
use Modules\Xot\Datas\XotData;
use Modules\User\Http\Controllers\Auth\LogoutController;

require 'socialite.php';


>>>>>>> 8055579 (.)
if (XotData::make()->register_pub_theme) {
    // require 'web_tall.php';
} else {
    Route::get('/login', static fn () => redirect('/admin/login'))->name('login');
}

Route::post('/logout', LogoutController::class)->name('logout');
<<<<<<< HEAD
// Route::get('/upgrade', 'UpgradeController');
=======
//Route::get('/upgrade', 'UpgradeController');
>>>>>>> 8055579 (.)
