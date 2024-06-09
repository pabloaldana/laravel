<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AreaController;
use Illuminate\Support\Facades\Route;






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas para posts
    Route::resource('posts', PostController::class);

    // Rutas para áreas
    Route::resource('areas', AreaController::class);
});

Route::get('/', [AreaController::class, 'index1']);
Route::get('/area/{area_id}', [PostController::class, 'getPostsByAreas']);
Route::get('/area/post/{post_id}', [PostController::class, 'showPost']);

require __DIR__ . '/auth.php';