<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/profil/{id}', [UserController::class, 'getProfil'])->middleware(['auth'])->name('profil');
Route::put('/profil/{id}', [UserController::class, 'updateProfil'])->middleware(['auth'])->name('profil.update');
Route::put('/profil/password/{id}', [UserController::class, 'changePassword'])->middleware(['auth'])->name('password.update');
Route::put('/profil/image/{id}', [UserController::class, 'changeImage'])->middleware(['auth'])->name('image.update');

