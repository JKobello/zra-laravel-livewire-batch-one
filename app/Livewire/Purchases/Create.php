<?php

namespace App\Livewire\Purchases;

use Livewire\Component;
use App\Models\Purchase;

class Create extends Component
{
    public $invoice_number;
    public $purchase_order_number;
    public $status;
    public $payment_status;
    public $payment_method;
    public $currency;
    public $total_amount;
    public $discount;
    public $tax;

        public function store()
    {
        $validatePurchase = $this->validate([
            // 'supplier_id' => 'required|exists:suppliers,id',
            'invoice_number' => 'required|string|max:255',
            'purchase_order_number' => 'required|string|max:255',
            'status' => 'required|in:pending,approved,completed,cancelled',
            'payment_status' => 'required|in:unpaid,partial,paid',
            'payment_method' => 'nullable|string|max:255',
            'currency' => 'nullable|string|max:10',
            'total_amount' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'tax' => 'nullable|numeric',
        ]);

        Purchase::create($validatePurchase);

        session()->flash('success', 'Purchase created successfully.');

        return redirect()->route('purchases.index');
    }

    public function render()
    {
        return view('livewire.purchases.create');
    }
}
