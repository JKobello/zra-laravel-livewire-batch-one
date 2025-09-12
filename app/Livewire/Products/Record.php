<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Product;

class Record extends Component
{
    public Product $product;

    public function render()
    {
        return view('livewire.products.record');
    }
}
