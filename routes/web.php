<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\UploadController;


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



Route::get('/', [HomeController::class, 'index'])->name('home');

// users
Route::get('/users', [UserController::class, 'index'])->name('users.index'); #
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user?}', [UserController::class, 'show'])->name('users.show'); #
Route::get('/users/{user?}/edit', [UserController::class, 'edit'])->name('users.edit'); #
Route::put('/users/{user?}', [UserController::class, 'update'])->name('users.update'); #
Route::delete('/users/{user?}', [UserController::class, 'destroy'])->name('users.destroy');

// Route::resource('users', UserController::class);

// upload
Route::get('/upload', [UploadController::class, 'index'])->name('upload.index');
Route::get('/upload/create', [UploadController::class, 'create'])->name('upload.create');
Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');

