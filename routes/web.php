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

Route::get('/account', function() { return view('pages.list-account'); })->name('account.index');
// Formulário
Route::get('/account/create ', function() { return view('pages.create-account'); })->name('account.create');

// Submeter dados do formulário
Route::post('/account ', [AccountController::class, 'store'])->name('account.store');
// Listando uma conta
Route::get('/account/{id} ', [AccountController::class, 'create'])->name('account.show');


