<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DebtController;
use \IlLuminate\Http\Request;

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

Route::view('/welcome', 'welcome');

Route::prefix('contas')->group(function () {

    Route::get('/all', [DebtController::class, 'index'])->name('contas.index');

    Route::view('/create','pages.contas.create')->name('contas.create');

    Route::get('/show/{?id}', [DebtController::class, 'show'])->name('contas.show');

    Route::view('/edit{id?}','pages.contas.edit')->name('contas.edit');

    Route::post('/save', [DebtController::class, 'update'])->name('contas.update');

});


