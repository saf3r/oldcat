<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Route;

Route::post('/sidebar', [HomeController::class, 'sidebar'])->name('sidebar');

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/pets', [PetController::class, 'index'])->name('pet.index');
    Route::get('/pets/add', [PetController::class, 'update'])->name('pet.add');
    Route::get('/pets/edit/{id}', [PetController::class, 'update'])->name('pet.edit');
    Route::post('/pets/send', [PetController::class, 'send'])->name('pet.update');
    Route::get('/pets/view/{id}', [PetController::class, 'view'])->name('pet.view');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
