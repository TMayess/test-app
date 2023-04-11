<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(1);
        return view('fournisseur/gestionArticle',compact('products'));
    }

    public function store(ProductFormRequest $request){
        $validated = $request->validated();
        $image_path = $request->file('image')->store('image/products', 'public');

        $product = new Product($validated);
        $product->image = $image_path;
        $product->save();

        return redirect()->route('article.index')->with('message','Produit est ajouté');
    }
    public function SearchProduct(Request $request)
    {
        $products = Product::all();
    if($request->keyword != ''){
    $products = Product::where('name','LIKE','%'.$request->keyword.'%')->get();
    }
    return response()->json([
        'products' => $products
    ]);
    }



    public function index2()
    {
        return view('fournisseur/gestionPack');
    }
}
