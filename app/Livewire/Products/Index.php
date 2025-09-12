<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\Attribute\On;
use App\Models\Product;

class Index extends Component
{
    #[On('destroy-product')]
    public function destroy(Product $product)
    {
        $product->delete();
    }

    public function render()
    {
        return view('livewire.products.index', [
            'products' => Product::all()
        ]);
    }
}

