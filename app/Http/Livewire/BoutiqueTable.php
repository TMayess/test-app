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
    public function render()
    {
        return view('livewire.boutique-table',[
            'products' => Product::where('name','LIKE', "%{$this->search}%")->paginate(12)
        ]);
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
}
