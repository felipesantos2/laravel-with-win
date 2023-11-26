<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AccountController;
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

Route::view('/', 'welcome');
Route::view('/welcome', 'welcome');


Route::prefix('contas')->controller(AccountController::class)->group(function () {
    Route::match(
        ['get', 'post'],
        '/edit/{id?}',
        function ( ?string $id = null ) {
            
        }
    )->name('contas.edit');
});


