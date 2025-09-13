<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithFileUploads;

class Edit extends Component
{

    use WithFileUploads;

    public $id;
    public $product;

    public $name;
    public $code;
    public $unit_price;
    public $stock;
    public $type;
    public $description;
    public $file;

    public function mount($id){
        $this->product = Product::findOrFail($id);

        $this->name = $this->product->name;
        $this->code = $this->product->code;
        $this->unit_price = $this->product->unit_price;
        $this->stock = $this->product->stock;
        $this->type = $this->product->type;
        $this->description = $this->product->description;
        $this->file = $this->product->file;
    }

    public function update()
    {


        $validateProduct = $this->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:20|unique:products,code,' . $this->product->id,
            'unit_price' => 'required|numeric',
            'stock' => 'required|integer',
            'type' => 'required|string|max:50',
            'description' => 'required|string',
            'file' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
        ]);

        //dd($request);

        $this->product->update($validateProduct);

        session()->flash('success', 'Product updated successfully.');

        return redirect()->route('products.index');


    }

    public function save(){
        $this->file->store(path: 'attachments/photos');
    }

    public function render()
    {
        return view('livewire.products.edit');
    }
}
