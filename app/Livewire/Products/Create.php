<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use App\Models\Product;
use App\Utils\FileHelper;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $code;
    public $unit_price;
    public $stock;
    public $type;
    public $description;
    public $mf_date;
    public $newPhoto;

    private const UPLOAD_PATH = 'attachments/products/img';

    public function store()
    {
        $validateProduct = $this->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:20|unique:products,code',
            'unit_price' => 'required|numeric',
            'stock' => 'required|integer',
            'type' => 'required|string|max:50',
            'description' => 'nullable|string',
            'mf_date' => 'required|date|before_or_equal:today',
            'newPhoto' => 'image|max:1024',
        ]);

        if ($this->newPhoto instanceof TemporaryUploadedFile) {
            $path = storage_path('app/public/' . self::UPLOAD_PATH);
            FileHelper::createFolderIfNotExists($path);

            // store inside storage/app/public/attachments/products/img
            $validatedProduct['photo'] = $this->newPhoto->store(self::UPLOAD_PATH, 'public');
        }

        Product::create($validateProduct);

        session()->flash('success', 'Product created successfully.');

        return redirect()->route('products.index');
    }

    public function render()
    {
        return view('livewire.products.create');
    }
}
