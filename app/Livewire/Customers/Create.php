<?php

namespace App\Livewire\Customers;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use App\Models\Customer;
use App\Utils\FileHelper;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $company_name;
    public $email;
    public $phone_number;
    public $account_balance;
    public $country;
    public $mf_date;
    // public $newPhoto;

    private const UPLOAD_PATH = 'attachments/products/img';

    public function store()
    {
         $validatedCustomer = $this->validate([
            'name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            // 'code' => 'required|string|max:20|unique:products,code,' . $this->product->id,
            'email' => 'required|string|max:50',
            'phone_number' => 'required|string',
            'account_balance' => 'required|numeric',
            'country' => 'required|string|max:50',
            
        ]);

        // if ($this->newPhoto instanceof TemporaryUploadedFile) {
        //     $path = storage_path('app/public/' . self::UPLOAD_PATH);
        //     FileHelper::createFolderIfNotExists($path);

        //     // store inside storage/app/public/attachments/products/img
        //     $validatedCustomer['photo'] = $this->newPhoto->store(self::UPLOAD_PATH, 'public');
        // }

        Customer::create($validatedCustomer);

        session()->flash('success', 'Customer created successfully.');

        return redirect()->route('customers.index');
    }

    public function render()
    {
        return view('livewire.customers.create');
    }
}
