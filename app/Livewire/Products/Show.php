<?php

namespace App\Livewire\Products;
use App\Models\Product;

use Livewire\Component;

class Show extends Component
{
    public $id;
    public $product;


    public function mount() {
        // var_dump($this->id, $this->product);
        $this->product = Product::findOrFail($this->id);
        // dd($this->product);
    }

    public function render()
    {
        return view('livewire.products.show');
    }
}
