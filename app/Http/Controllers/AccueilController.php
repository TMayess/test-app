<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    function show() {
        // affichage de la vue
        return view('accueil');
    }
}
