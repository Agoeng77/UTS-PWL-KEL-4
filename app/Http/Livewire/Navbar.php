<?php

namespace App\Http\Livewire;

use App\Models\category;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.navbar',[
            'categories' => category::all()
        ]);
    }
}
