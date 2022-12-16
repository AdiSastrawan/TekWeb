<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/room',[RoomController::class, 'index'])->name('room');
Route::get('/book',[BookController::class, 'index'])->middleware(['auth', 'verified'])->name('book');
Route::post('/order',[BookController::class, 'store'])->middleware(['auth', 'verified'])->name('order');
Route::get('/user',[DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('userdashboard');
Route::get('/edit',[DashboardController::class, 'editPage'])->middleware(['auth', 'verified'])->name('userdashboard.edit');
Route::get('/user/{id}',[DashboardController::class, 'removeRent'])->middleware(['auth', 'verified'])->name('userdashboard.delete');
Route::put('/user/{id}',[DashboardController::class,'update'])->middleware(['auth', 'verified'])->name('userdashboard.update');

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
