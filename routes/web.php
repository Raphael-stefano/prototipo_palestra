<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Grupo de rotas para páginas
Route::prefix('pages')->name('pages.')->group(function () {
    Route::get('/', function () {
        return view('pages/home');
    })->name('landing-page');

    Route::get('/group', function () {
        return view('pages/group');
    })->name('group');
});

// Rota resource para UserController
Route::resource('users', UserController::class);

// Grupo de rotas para o dashboard
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('home');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::get('/users/cadastrar', [AdminController::class, 'cadastrar'])->name('cadastrar');
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/authenticate', [AdminController::class, 'authenticate'])->name('authenticate');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
});