<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Product;

class Record extends Component
{
    public Product $product;

    public function destroy(Product $product)
    {
        $this->dispatch('destroy-product', product: $product);
        // $parent->destroy($product);
    }

    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.products.record');
    }
}
