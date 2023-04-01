<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;

Route::get('/', [AccueilController::class, 'show'])->name('accueil');

Route::get('/boutique', function () {
    return view('boutique');
})->name('boutique');

Route::get('/auth', function () {
    return view('connexion-inscription');
})->name('auth');


Route::get('/article', function(){
    return view('article');
})->name('article');




 ?>

