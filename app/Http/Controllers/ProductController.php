<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::All();
        return view('fournisseur/gestionArticle',compact('products'));
    }

    public function store(ProductFormRequest $request){
            $date = $request->validated();

            $product = Product::create($date);
            return redirect('/gestion-article')->with('message','Produit est ajouter');
    }

    public function index2()
    {
        return view('fournisseur/gestionPack');
    }
}
