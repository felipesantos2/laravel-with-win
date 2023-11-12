<?php

use Illuminate\Support\Facades\Route;

use function Termwind\render;
use \App\Http\Controllers\accountController;

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

Route::get('/list', [accountController::class, 'index']);


// Route::get('/live', [\app\Livewire\HelloWorld, render()]);
