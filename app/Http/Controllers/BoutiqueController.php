<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\Achat;
use App\Models\Product;
use App\Models\Wishlist;
use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BoutiqueController extends Controller
{
    public function index(){
        // affiche les produit de facon aléatoire dans boutique
        $products= Product::inRandomOrder()->get();

        return view('boutique')->with('products',$products);
    }
// quand on clique sur le produit il recupére les info du produit
    public function produit($id){
        $product = Product::findOrFail($id); //recupere produit
        $images = DB::table('product_images') //reccupere les image du produit
            ->where('product_id', '=', $id)
            ->get();


        return view('article', ['product' => $product],['images' => $images]);
    }

    // recupere la list des achat (jointure user produit et achat)
    public function list()
    {
        $user_id = Auth::id();
        $achats = Achat::join('users', 'achats.user_id', '=', 'users.id')
                       ->join('products', 'achats.product_id', '=', 'products.id')
                       ->select('achats.*', 'products.name as produit_name', 'products.description as produit_description','products.price as produit_price','products.image_principal','products.created_at as produit_created_at')
                       ->where('users.id', '=', $user_id)
                       ->get();

        return view('list-achat', compact('achats'));
    }

    // afficher la list des favoris
    public function wishlist(){

        return view('favoris');

    }


    // ajouter un achat avec bouton acheter dans article

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

// transforme la page recu.blade.php a un pdf
    $html = view('recu', compact('achat'))->render();
    $pdf = new Dompdf();

    $pdf->loadHtml($html);
    $pdf->setPaper('A4', 'portrait');


    $pdf->render();

// afficher le recu
    return $pdf->stream('recu.pdf');


    // return redirect()->route('boutique')->with('success', 'Votre achat est effictué avec succès!');
    }
// supprimer prod fav dans list favoris
    public function delete_favoris($product_id){
        $user_id = Auth::id();
        $product = Wishlist::find($product_id);
        $favoris=DB::table('wishlists')
        ->where('user_id',$user_id)
        ->where('product_id',$product_id);


        $favoris->delete();

        return redirect()->route('favoris')->with('success', 'suces');
    }

        // supprimer article dans gestion arti dn fourni

    public function delete_article($product_id){
        $article=DB::table('products')
        ->where('id',$product_id);
        $article->delete();

        return redirect()->route('article.index')->with('success', 'suces');
    }
    // qabel nchlh

    public function modif_article($id)
    {
        $product = Product::findOrFail($id);

        $categories = categories::all();
        return view('modifArticle')->with(['categories' => $categories,
    'product' => $product]);

    }
}
