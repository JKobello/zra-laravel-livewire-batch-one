<?php

namespace App\Livewire\Customers;

use App\Models\Customer;
use Livewire\Component;

class Index extends Component
{

    public $customers;
    public $customerName;

    public function mount() {
        $this->customers = Customer::all();
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        $this->customers = Customer::all();
    }

    public function render()
    {
        return view('livewire.customers.index');
    }

    public function rendering() {
        
    }
}
