<?php

namespace App\Livewire\Products;

use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use Livewire\Component;
use Livewire\Attribute\On;
use App\Models\Product;

class Index extends Component
{
    public $products;

    public function mount($products = []) {
        if ($products) {
            $this->products = $products;
        } else {
            $this->products = Product::all();
        }
    }

    use WithPagination, WithoutUrlPagination;

    public function destroy(Product $product)
    {
        $product->delete();
        session()->flash('success', 'Product deleted successfully.');
        $this->redirectRoute('products.index', true);
    }

    public function render()
    {
        return view('livewire.products.index');
    }
}

