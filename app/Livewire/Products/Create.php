<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $code;
    public $unit_price;
    public $stock;
    public $type;
    public $description;
    public $photo;

    public function store()
    {
        $validateProduct = $this->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:20|unique:products,code',
            'unit_price' => 'required|numeric',
            'stock' => 'required|integer',
            'type' => 'required|string|max:50',
            'description' => 'nullable|string',
            'photo' => 'image|max:1024',
        ]);

        Product::create($validateProduct);

        session()->flash('success', 'Product created successfully.');

        return redirect()->route('products.index');
    }

    public function save()
    {
        $this->photo->store(path: 'attachments/photos');
    }

    public function render()
    {
        return view('livewire.products.create');
    }
}
