<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AreaController;
use Illuminate\Support\Facades\Route;

// Ruta para el dashboard (requiere autenticación)
Route::get('/dashboard', function () {
    return redirect()->route('areas.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grupo de rutas que requieren autenticación
Route::middleware('auth')->group(function () {
    // Rutas para el perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas para los posts
    Route::resource('posts', PostController::class)->except(['show']); // Excluye la ruta 'show'

    // Rutas para las áreas, incluyendo la creación, edición, actualización y eliminación
    Route::resource('areas', AreaController::class)->except(['show']);
});

// Ruta principal para cargar todas las áreas en la vista welcome.blade.php
Route::get('/', [AreaController::class, 'indexWelcome'])->name('welcome');

// Ruta para mostrar los detalles de un área específica sin autenticación
Route::get('/areas/{area}', [AreaController::class, 'show'])->name('areas.show');

// Ruta para mostrar los detalles de un post específico sin autenticación
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show'); // Cambia la ruta a '/posts/{id}'

// Archivo de rutas de autenticación
require __DIR__ . '/auth.php';