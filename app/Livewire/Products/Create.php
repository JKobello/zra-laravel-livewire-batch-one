<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use App\Models\Product;
use App\Utils\FileHelper;

class Create extends Component
{
    use WithFileUploads;

    #[Validate('required|string|max:255')]
    public $name;

    #[Validate('required|string|max:20|unique:products,code')]
    public $code;

    #[Validate('required|numeric')]
    public $unit_price;

    #[Validate('required|integer')]
    public $stock;

    #[Validate('required|string|max:50')]
    public $type;

    #[Validate('nullable|string')]
    public $description;

    #[Validate('required', as: 'Manufactured Date')]
    #[Validate('date', as: 'Manufactured Date')]
    #[Validate('before_or_equal:today', as: 'Manufactured Date')]
    public $mf_date;

    #[Validate('image|max:1024')]
    public $newPhoto;

    private const UPLOAD_PATH = 'attachments/products/img';

    public function store()
    {
        $validateProduct = $this->validate();

        if ($this->newPhoto instanceof TemporaryUploadedFile) {
            $path = storage_path('app/public/' . self::UPLOAD_PATH);
            FileHelper::createFolderIfNotExists($path);

            // store inside storage/app/public/attachments/products/img
            $validatedProduct['photo'] = $this->newPhoto->store(self::UPLOAD_PATH, 'public');
        }

        Product::create($validateProduct);

        session()->flash('success', 'Product created successfully.');

        return $this->redirectRoute('products.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.products.create');
    }
}
