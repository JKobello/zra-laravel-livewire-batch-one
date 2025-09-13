<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\Attribute\On;
use App\Models\Product;

class Index extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::all();
    }

    public function destroy(Product $product)
    {
        $product->delete();
        session()->flash('success', 'Product deleted successfully.');
        $this->redirectRoute('products.index', true);
    }

    public function render()
    {
        return view('livewire.products.index');
    }
}

