<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BoutiqueController;
use App\Http\Controllers\Admin\UserController;





Route::get('/', function () {
    return view('accueil');
})->name("accueil");

Route::get('/boutique',[BoutiqueController::class, 'index'])->name("boutique");
Route::get('/produit/{product}',[BoutiqueController::class, 'produit'])->name("produit");

Route::post('/produit/{id}',[BoutiqueController::class, 'addAchat'])->name("achat");


Route::get('/list-achat', function () {
    return view('list-achat');
})->name("list-achat");

Route::get('/favoris', function () {
    return view('favoris');
})->name("favoris");


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



Route::get('/gestion-utilisateur', [ProductController::class, 'index'])->name('utilisateur.index');

Route::namespace('Admin')->prefix('admin')->middleware(['auth:sanctum', 'verified', 'UserRole:admin'])->group(function () {
    Route::get('/gestion-utilisateur', [UserController::class,'index'])->name('utilisateur.index');
    Route::get('/utilisateur-edit/{user}', [UserController::class, 'edit'])->name('utilisateur.edit');
    Route::post('/utilisateur-edit/{user}', [UserController::class, 'update'])->name('utilisateur.update');
    Route::delete('/utilisateur/{user}', [UserController::class, 'destroy'])->name('utilisateur.destroy');

});

Route::prefix('admin')->middleware(['auth:sanctum', 'verified', 'UserRole:admin,fournisseur'])->group(function () {
    Route::get('/gestion-article', [ProductController::class,'index'])->name('article.index');
    Route::post('/gestion-article', [ProductController::class,'store'])->name('article.store');
    Route::get('/gestion-pack', [ProductController::class,'index2'])->name('pack.index');
    Route::post('/b', [ProductController::class,'SearchProduct'])->name('search.products');
});

// Route::prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
//     Route::resource('users','UsersController');
// });


require __DIR__.'/auth.php';
