<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoutiqueController extends Controller
{
    public function index()
    {

        return view('boutique');
    }

    public function produit()
    {
        return view('article');
    }


    public function addAchat($produit_id)
{

    $client_id = Auth::id();
    $produit = Product::find($produit_id);

    if (!$produit) {
        return response()->json(['error' => 'Produit non trouvé.'], 404);
    }

    $achat = new Achat();
    $achat->client_id = $client_id;
    $achat->produit_id = $produit_id;
    $achat->save();

    return response()->json(['success' => 'Achat ajouté avec succès.']);
}
}
