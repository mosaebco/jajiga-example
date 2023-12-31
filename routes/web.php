<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [SiteController::class, 'index'])->name('home');

Route::get('/dashboard', [PropertyController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('property', PropertyController::class);
    Route::get('/property/{property}/reservation', [PropertyController::class, 'reservation'])->name('property.reservation');
    Route::post('/property/{property}/reservation', [PropertyController::class, 'storeReservation'])->name('property.storeReservation');
});
// Route::middleware('auth')->group(function () {
//     Route::get('/property/create', [PropertyController::class, 'create'])->name('property.create');
//     Route::post('/property', [PropertyController::class, 'store'])->name('property.store');
// });

// Route::middleware('auth')->resource('photos', PhotoController::class);

require __DIR__.'/auth.php';
