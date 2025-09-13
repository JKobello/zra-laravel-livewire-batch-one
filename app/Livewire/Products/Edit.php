<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use App\Models\Product;
use App\Utils\FileHelper;

class Edit extends Component
{
    use WithFileUploads;

    public Product $product;
    public $name;
    public $code;
    public $unit_price;
    public $stock;
    public $type;
    public $description;
    public $mf_date;
    public $newPhoto;

    private const UPLOAD_PATH = 'attachments/products/img';
    private const SUCCESS = 'Product updated successfully.';

    public function mount()
    {
        // $this->product = $product;
        $this->name = $this->product->name;
        $this->code = $this->product->code;
        $this->unit_price = $this->product->unit_price;
        $this->stock = $this->product->stock;
        $this->type = $this->product->type;
        $this->description = $this->product->description;
        $this->mf_date = $this->product->mf_date;
        // $this->photo = $this->product->photo;
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
            'mf_date' => 'required|date|before_or_equal:today',
            'newPhoto' => 'nullable|image|max:1024',
        ]);

        if ($this->newPhoto instanceof TemporaryUploadedFile) {
            $path = storage_path('app/public/' . self::UPLOAD_PATH);
            FileHelper::createFolderIfNotExists($path);

            // store inside storage/app/public/attachments/products/img
            $validatedProduct['photo'] = $this->newPhoto->store(self::UPLOAD_PATH, 'public');

            // Delete the previous file to avoid unused files accumulating:
            if ($this->product->photo && $this->newPhoto instanceof TemporaryUploadedFile) {
                \Storage::disk('public')->delete($this->product->photo);
            }
        }

        $this->product->update($validatedProduct);

        session()->flash('success', self::SUCCESS);

        return redirect()->route('products.index');
    }

    public function render()
    {
        return view('livewire.products.edit');
    }
}
