<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Product;

class Show extends Component
{

    public $product;
    public $id;

    public function mount($id){
        $this->product = Product::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.products.show');
    }
}
