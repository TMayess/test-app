<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Position;
use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{
    public function index()
{
    $products = Product::all();
    $categories = categories::all();
    $positions = Position::all();
    return view('gestionArticle', compact('products', 'categories', 'positions'));
}


    public function store(ProductFormRequest $request){

        $chambres = collect();
        $fournisseur = Auth::user();

        $type = $request->input('produit');
        $validated = $request->validated();
        $image=array();



        $product = new Product($validated);
        $product->tag = "#".$request->input('produit');
        $product->fournisseur_id = $fournisseur->id;

        $image_path = $request->file('imagePrincipal')->store('image/products/imagePrincipal', 'public');
        $product->image_principal = $image_path;


        $product->categorie_id = $request->input('categorie');

        $product->save();
        $product_id = $product->id;

        $images = $request->file('images');
        foreach($images as $image) {
            $image_path = $image->store('image/products/imageS', 'public');

            DB::table('product_images')->insert([
                'image' => $image_path,
                'product_id' => $product_id
            ]);
        }

        if ($type=='meuble'){
            DB::table('meubles')->insert([
                'largeur' => $request->input('largeur'),
                'hauteur' => $request->input('hauteur'),
                'profondeur' => $request->input('profondeur'),
                'materials' => $request->input('materials'),
                'product_id' => $product_id
            ]);
        } elseif($type=='literie'){
            DB::table('literies')->insert([
                'taille' => $request->input('taille'),
                'product_id' => $product_id,
            ]);
        }

        if ($request->input('chambre')) {
            DB::table('position_product')->insert([
                'produit_id' => $product_id,
                'position_id' => 1
            ]);
        }
        if ($request->input('salon')) {
            DB::table('position_product')->insert([
                'produit_id' => $product_id,
                'position_id' => 2
            ]);
        }
        if ($request->input('salle-manger')) {
            DB::table('position_product')->insert([
                'produit_id' => $product_id,
                'position_id' => 3
            ]);
        }
        if ($request->input('cuisine')) {
            DB::table('position_product')->insert([
                'produit_id' => $product_id,
                'position_id' => 4
            ]);
        }
        if ($request->input('salle-bain')) {
            DB::table('position_product')->insert([
                'produit_id' => $product_id,
                'position_id' => 5
            ]);
        }
        if ($request->input('bureau')) {
            DB::table('position_product')->insert([
                'produit_id' => $product_id,
                'position_id' => 6
            ]);
        }

     return back();
    }
    public function SearchProduct(Request $request)
    {
        $products = Product::all();
    if($request->keyword != ''){
    $products = Product::where('name','LIKE','%'.$request->keyword.'%')->get();
    }
    return response()->json([
        'products' => $products
    ]
);
    }

    public function indexConfirm () {
        return view('admin.confirmArticle');
    }




}
