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

Route::get('/', function () {
    return view('index');
});

Route::get('/account', [AccountController::class, 'index'])->name('account.index');
// Formulário
Route::get('/account/create ', [AccountController::class, 'create'])->name('account.create');
// Submeter dados do formulário
Route::post('/account ', [AccountController::class, 'create'])->name('account.store');
// Listando uma conta
Route::get('/account/{} ', [AccountController::class, 'create'])->name('account.show');


