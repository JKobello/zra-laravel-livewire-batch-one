<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Product;

class Create extends Component
{
    public $name;
    public $code;
    public $unit_price;
    public $stock;
    public $type;
    public $description;

    public function store()
    {
            $validateProduct = $this->validate([
                'name' => 'required|string|max:255',
                'code' => 'required|string|max:20|unique:products,code',
                'unit_price' => 'required|numeric',
                'stock' => 'required|integer',
                'type' => 'required|string|max:50',
                'description' => 'nullable|string',
            ]);

            Product::create($validateProduct);

            session()->flash('success', 'Product created successfully.');

            return redirect()->route('products.index');
    }

    public function render()
    {
        return view('livewire.products.create');
    }
}
