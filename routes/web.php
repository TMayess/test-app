<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('accueil');
})->name("accueil");

Route::get('/boutique', function () {
    return view('boutique');
})->name("boutique");


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('posts', [PostController::class,'index'])->name('posts.index');
// Route::get('posts2', [PostController::class,'index2'])->name('posts.index2');



Route::controller(ProductController::class)->group(function () {
    Route::get('/gestion-article', 'index')->name('article.index');
    Route::post('/gestion-article', 'store')->name('article.store');
    Route::get('/gestion-pack', 'index2')->name('pack.index');
    Route::get('/gestion-utilisateur', 'index')->name('utilisateur.index');
});
require __DIR__.'/auth.php';
