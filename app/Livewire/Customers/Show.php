<?php

namespace App\Livewire\Customers;
use App\Models\Customer;

use Livewire\Component;

class Show extends Component
{
    public $id;
    public $customer;


    public function mount() {
        // var_dump($this->id, $this->product);
        $this->customer = Customer::findOrFail($this->id);
        // dd($this->product);
    }

    public function render()
    {
        return view('livewire.customers.show');
    }
}
