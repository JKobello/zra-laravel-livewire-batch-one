<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;

class Edit extends Component
{
    use WithFileUploads;

    public $product;
    public $name;
    public $code;
    public $unit_price;
    public $stock;
    public $type;
    public $description;
    public $photo;

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->name = $product->name;
        $this->code = $product->code;
        $this->unit_price = $product->unit_price;
        $this->stock = $product->stock;
        $this->type = $product->type;
        $this->description = $product->description;
        $this->photo = $product->photo;
    }

    public function save()
    {
        $this->photo->store(path: 'attachments/photos');
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
                'photo' => 'image|max:1024',
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
