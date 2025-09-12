<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Product;

class Index extends Component
{
    public $products;
    public $productName;

    public function mount()
    {
        $this->products = Product::all();
    }


    public function destroy(Product $product)
    {
        $product->delete();
        // $this->products = Product::all();
    }

    public function render()
    {
        return view('livewire.products.index');
    }

    public function rendering()
    {
        // $this->products = [];
        // dd($this->products);
        $this->products = Product::all();

    }
}

