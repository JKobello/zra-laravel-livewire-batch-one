<?php

namespace App\Livewire\Purchases;

use Livewire\Component;
use App\Models\Purchase;

class Show extends Component
{
    public $purchase;
    public $id;

    

    public function mount($id)
    {
        $this->purchase = Purchase::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.purchases.show');
    }
}
