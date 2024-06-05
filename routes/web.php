<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('posts', PostController::class);
});

Route::get('/naturales', function () {
    return view('naturales');
});
Route::get('/historia', function () {
    return view('historia');
});
Route::get('/matematica', function () {
    return view('matematica');
});
Route::get('/lengua', function () {
    return view('lengua');
});
Route::get('/literatura', function () {
    return view('literatura');
});

Route::resource('areas', AreaController::class);
Route::resource('posts', PostController::class);


require __DIR__ . '/auth.php';
