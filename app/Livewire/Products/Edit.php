<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Product;

class Edit extends Component
{
    public $product;
    public $name;
    public $code;
    public $unit_price;
    public $stock;
    public $type;
    public $description;

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->name = $product->name;
        $this->code = $product->code;
        $this->unit_price = $product->unit_price;
        $this->stock = $product->stock;
        $this->type = $product->type;
        $this->description = $product->description;
    }

    public function update()
    {
            $validatedProduct = $this->validate([
                'name' => 'required|string|max:255',
                'code' => 'required|string|max:20|unique:products,code,' . $this->product->id,
                'unit_price' => 'required|numeric',
                'stock' => 'required|integer',
                'type' => 'required|string|max:50',
                'description' => 'required|string',
            ]);

            $this->product->update($validatedProduct);

            session()->flash('success', 'Product updated successfully.');

            return redirect()->route('products.index');
    }

    public function render()
    {
        return view('livewire.products.edit');
    }
}
