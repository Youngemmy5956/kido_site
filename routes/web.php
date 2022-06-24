<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\AboutUsController;
use App\Http\Controllers\Web\AboutBtcController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\WalletController;
use App\Http\Controllers\Web\TeamController;
use App\Http\Controllers\Web\ServiceController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::as("web.")->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('about-us', [AboutUsController::class, 'about'])->name('about');
    Route::get('our-wallet', [WalletController::class, 'wallet'])->name('wallet');
    Route::get('contact-us', [ContactController::class, 'contact'])->name('contact');
    Route::get('our-team', [TeamController::class, 'team'])->name('team');
    Route::get('about-btc', [AboutBtcController::class, 'about_btc'])->name('about_btc');
    Route::get('our-service', [ServiceController::class, 'service'])->name('service');

});
