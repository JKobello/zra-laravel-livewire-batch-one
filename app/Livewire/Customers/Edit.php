<?php

namespace App\Livewire\Customers;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use App\Models\Customer;
use App\Utils\FileHelper;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;

    public Customer $customer;
    public $name;
    public $company_name;
    public $email;
    public $phone_number;
    public $account_balance;
    public $country;
    // public $mf_date;
    // public $newPhoto;

    // private const UPLOAD_PATH = 'attachments/products/img';

    public function mount()
    {
        
        $this->name = $this->customer->name;
        $this->company_name = $this->customer->company_name;
        $this->email = $this->customer->email;
        $this->phone_number = $this->customer->phone_number;
        $this->account_balance = $this->customer->account_balance;
        $this->country = $this->customer->country;
        // $this->mf_date = $this->customer->mf_date;
        // $this->photo = $this->product->photo;
    }

    public function update()
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

        //     // Delete the previous file to avoid unused files accumulating:
        //     if ($this->product->photo && $this->newPhoto instanceof TemporaryUploadedFile) {
        //         Storage::disk('public')->delete($this->product->photo);
        //     }
        // }

        $this->customer->update($validatedCustomer);

        session()->flash('success', 'Customer updated successfully.');

        return redirect()->route('customers.index');
    }

    public function render()
    {
        return view('livewire.customers.edit');
    }
}
