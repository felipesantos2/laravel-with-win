<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AccountController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'index');

Route::prefix('felipe')->controller(AccountController::class)->group(function () {
    Route::get('/account', 'index')->name('account.index');
    Route::get('/account/create', 'create')->name('account.create');
    Route::post('/account/submit', 'store')->name('account.store');
    Route::post('/account/{id}', 'show')->name('account.show');
});


