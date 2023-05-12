<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class FavorisTable extends Component
{
    public string $search = '';
    public function render()
    {
        // rechercher le produit aparir du nom article (declarer var search)

        $user_id = Auth::id();
        $wish = Wishlist::join('users','wishlists.user_id','=','users.id')
        ->join('products', 'wishlists.product_id', '=', 'products.id')
        ->select('wishlists.*', 'products.name as produit_name', 'products.description as produit_description','products.price as produit_price','products.image_principal','products.created_at as produit_created_at')
        ->where('users.id', '=', $user_id)
        ->where('products.name','LIKE', "%{$this->search}%")
        ->paginate(10);

        return view('livewire.favoris-table', ['wish' => $wish]);
    }
}
