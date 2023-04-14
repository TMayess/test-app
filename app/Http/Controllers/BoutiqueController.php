<?php

namespace App\Http\Controllers;

use App\Models\Achat;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BoutiqueController extends Controller
{
    public function index(){
        $products= Product::inRandomOrder()->get();

        return view('boutique')->with('products',$products);
    }
    public function produit($id){
        $product = Product::findOrFail($id);
        return view('article', ['product' => $product]);
    }


    public function addAchat($product_id)
    {

    $user_id = Auth::id();
    $product = Product::find($product_id);

    if (!$product) {
        return response()->json(['error' => 'Produit non trouvé.'], 404);
    }

    $achat = new Achat();
    $achat->user_id = $user_id;
    $achat->product_id = $product_id;
    $achat->save();

    return redirect()->route('boutique')->with('success', 'Votre achat est effictué avec succès!');
    }
}
