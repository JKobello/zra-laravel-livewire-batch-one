<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $code;
    public $unit_price;
    public $stock;
    public $type;
    public $description;
    public $file;

        public function store()
    {
        $validateProducts = $this->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:20|unique:products,code',
            'unit_price' => 'required|numeric',
            'stock' => 'required|integer',
            'type' => 'required|string|max:50',
            'description' => 'nullable|string',
            'file' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
        ]);

        Product::create($validateProducts);

        session()->flash('success', 'Product created successfully.');

        return redirect()->route('products.index');
    }

    public function save(){
        $this->file->store(path: 'attachments/photos');
    }

    public function render()
    {
        return view('livewire.products.create');
    }
}
