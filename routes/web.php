<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/surat/create', function () {
    return view('surat.create');
})->middleware(['auth', 'verified'])->name('surat.create');

Route::get('/kategori', function () {
    return view('kategori.index');
})->middleware(['auth', 'verified'])->name('kategori.index');

Route::get('/kategori/create', function () {
    return view('kategori.create');
})->middleware(['auth', 'verified'])->name('kategori.create');

Route::get('/about', function () {
    return view('about');
})->middleware(['auth', 'verified'])->name('about');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
