<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\category;
use Livewire\WithPagination;

class ProductCatalog extends Component
{
    use WithPagination;

    public $search, $categoryDetail;
    protected $updateQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount($categoryId)
    {
        $categoryDetail = category::find($categoryId);

        if($categoryDetail){
            $this->category = $categoryDetail;
        }
    }
    
    public function render()
    {
        if($this->search){
            $products = Product::where('category_id', $this->category->id)->where('nama', 'like', '%'.$this->search.'%');
        }else{
            $products = Product::where('category_id', $this->category->id);
        }

        $products = Product::all();
        return view('livewire.product-index',[
            'products' => $products,
            'title' => $this->category->nama
        ]);
    }
}
