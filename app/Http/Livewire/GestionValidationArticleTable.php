<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class GestionValidationArticleTable extends Component
{

    public string $search = '';
    public function render()
    {
        return view('livewire.gestion-validation-article-table',[
            'products' => Product::where('name','LIKE', "%{$this->search}%")->where('valide',0)->paginate(10)
        ]);
    }
    public function valide_article($product_id){
        $product = Product::find($product_id);
        $product->valide = 1;
        $product->save();

    }

    public function drop_article($product_id){
        $product = Product::find($product_id);

        $product->delete();
    }
}
