<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Merek;

class ProductIndex extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.product-index',[
            'products' => $products
        ]);
    }
}
