<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Wishlist;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BoutiqueTable extends Component
{
    use WithPagination;

    public string $search = '';
    public $categories = [];
    public $categorieId;
    public $tri = 'par-prix';


    public function render()
{
    $produit = Product::select('products.id', 'products.name', 'products.description', 'products.tag', 'products.valide', 'products.image_principal', 'products.price', 'products.categorie_id')
        ->join('position_product', 'products.id', '=', 'position_product.produit_id')
        ->join('positions', 'position_product.position_id', '=', 'positions.id')
        ->join('categories', 'categories.id', '=', 'products.categorie_id')
        ->where('products.name', 'LIKE', "%{$this->search}%")
        ->where('valide', 1);

    $categoriesPositions = [
        'chambre' => 'Chambre',
        'salon' => 'Salon',
        'salle-manger' => 'Salle a manger',
        'cuisine' => 'Cuisine',
        'salle-bain' => 'Salle de bain',
        'bureau' => 'Bureau'
    ];
    if (!empty($this->categorieId)) {
        if(!($this->categorieId === "Tout")) {
            $produit->where('products.categorie_id', '=', $this->categorieId);
        }
    }


    if ($this->tri === 'par-prix-asc') {
        $produit->orderBy('price', 'asc');
    } elseif ($this->tri === 'par-prix-desc') {
        $produit->orderBy('price', 'desc');
    }elseif ($this->tri === 'par-date-asc') {
        $produit->orderBy('products.created_at', 'desc');
    }elseif ($this->tri === 'par-date-desc') {
        $produit->orderBy('products.created_at', 'asc');
    }

    $positions = [];

    foreach ($this->categories as $categorie) {
        if (array_key_exists($categorie, $categoriesPositions)) {
            $positions[] = $categoriesPositions[$categorie];
        }
    }

    if (!empty($positions)) {
        $produit->whereIn('positions.name', $positions);
    }

    return view('livewire.boutique-table', [
        'products' => $produit->distinct('products.id')->paginate(12)
    ]);
}

    public function categoriesSelected($selectedIds)
    {
        $this->categories = $selectedIds;
    }


    public function addFavoris($product_id)
    {

        $user_id = Auth::id();
        $product = Product::find($product_id);

        $favoris = DB::table('wishlists')
                ->where('user_id', $user_id)
                ->where('product_id', $product_id);

        $isFavorited = $favoris->exists();

        if (!$product) {
            return response()->json(['error' => 'Produit non trouvé.'], 404);
        }

        if($isFavorited){
            $favoris->delete();
        }else{

        $favoris = new Wishlist();
        $favoris->user_id = $user_id;
        $favoris->product_id = $product_id;
        $favoris->save();

        $this->dispatchBrowserEvent('favorisAdded');
        }

    }
    public function handleRequest()
    {
        $categorie = Category::find($this->categorieId);
        // Faire quelque chose avec la catégorie sélectionnée
    }


}
