<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('accueil');
})->name('accueil');

Route::get('/boutique', function () {
    return view('boutique');
})->name('boutique');

Route::get('/auth', function () {
    return view('connexion-inscription');
})->name('auth');


Route::get('/article', function(){
    return view('article');
})->name('article');



