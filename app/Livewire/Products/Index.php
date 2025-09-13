<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class Index extends Component
{
    use WithPagination,WithoutUrlPagination;


        #[On('destroy-product')]
        public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        $this->redirectRoute('products.index',true);
        session()->flash('success', 'Product deleted successfully.');
        
    }

    public function render()
    {
        return view('livewire.products.index', [
            'products' => Product::paginate(5),
        ]);
    }

    
}
