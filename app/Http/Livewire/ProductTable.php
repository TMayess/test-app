<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductTable extends Component
{
    use WithPagination;

    public string $search = '';
    public function render()
    {
        return view('livewire.product-table',[
            'products' => Product::where('name','LIKE', "%{$this->search}%")->paginate(10)
        ]);
    }
}
