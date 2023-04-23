<?php

namespace App\Http\Controllers;

use App\Models\Achat;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function list()
    {
        $user_id = Auth::id();
        $achats = Achat::join('users', 'achats.user_id', '=', 'users.id')
                       ->join('products', 'achats.product_id', '=', 'products.id')
                       ->select('achats.*', 'products.name as produit_name', 'products.description as produit_description','products.price as produit_price','products.image_principal as produit_image','products.created_at as produit_created_at')
                       ->where('users.id', '=', $user_id)
                       ->get();

        return view('list-achat', compact('achats'));
    }

    public function wishlist(){
        // $user_id = Auth::id();
        // $wish=Wishlist::join('users','wishlists.user_id','=','users.id')
        // ->join('products', 'wishlists.product_id', '=', 'products.id')
        // ->select('wishlists.*', 'products.name as produit_name', 'products.description as produit_description','products.price as produit_price','products.created_at as produit_created_at')
        // ->where('users.id', '=', $user_id)
        // ->get();

        // return view('favoris',compact('wish'));
        return view('favoris');

    }

    // public function addFavoris($product_id)
    // {

    // $user_id = Auth::id();
    // $product = Product::find($product_id);

    // if (!$product) {
    //     return response()->json(['error' => 'Produit non trouvé.'], 404);
    // }

    // $favoris = new Wishlist();
    // $favoris->user_id = $user_id;
    // $favoris->product_id = $product_id;
    // $favoris->save();

    // return nullredirect()->route('boutique');
    // }

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

    public function delete_favoris($product_id){
        $user_id = Auth::id();
        $product = Wishlist::find($product_id);
        $favoris=DB::table('wishlists')
        ->where('user_id',$user_id)
        ->where('product_id',$product_id);


            $favoris->delete();

            return redirect()->route('favoris')->with('success', 'suces');
    }

    public function delete_article($product_id){
        $favoris=DB::table('products')
        ->where('id',$product_id);
        $favoris->delete();

        return redirect()->route('article.index')->with('success', 'suces');
    }
}
