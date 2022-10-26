<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Merek;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'products' => Product::take(4)->get(),
            'mereks' => Merek::all()
        ]);
    }
}
