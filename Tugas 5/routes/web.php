<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArithmeticController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AreaController;
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

Route::get('/',[LandingPageController::class, 'index'])->middleware(['auth', 'verified'])->name('landing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/arithmetic', [ArithmeticController::class, 'index'])->middleware(['auth', 'verified'])->name('arithmetic');
Route::post('/arithmetic', [ArithmeticController::class,'hitungJumlah'])->name('arithmetic');
Route::get('/area',[AreaController::class,'index'])->middleware(['auth', 'verified'])->name('area');
Route::post('/area',[AreaController::class,'hitungLuas'])->name('area');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
