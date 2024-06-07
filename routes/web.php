<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [AreaController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('posts', PostController::class);
});



Route::resource('areas', AreaController::class);
Route::resource('posts', PostController::class);

Route::get('/areas', [AreaController::class, 'index'])->name('areas.index');
Route::get('/areas/{id}/edit', [AreaController::class, 'edit'])->name('areas.edit');


require __DIR__ . '/auth.php';
