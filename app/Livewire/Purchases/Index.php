<?php

namespace App\Livewire\Purchases;

use Livewire\Component;
use App\Models\Purchase;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class Index extends Component
{
    use WithPagination,WithoutUrlPagination;

        public $id;

        public function destroy($id)
    {
        $purchase = Purchase::findOrFail($id);
        $purchase->delete();
        $this->redirectRoute('purchases.index',true);
        session()->flash('success', 'Purchase deleted successfully.');

    }

    public function render()
    {
        return view('livewire.purchases.index', [
            'purchases' => Purchase::paginate(5),
        ]);
    }
}
