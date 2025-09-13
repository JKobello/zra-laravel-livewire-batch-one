

<div>

    <h1>Products</h1>

    @if(session('success'))
        <div style="background-color:green;color:white">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div style="background-color:red;color:white">{{ session('error') }}</div>
    @endif

    <a style="background-color:blue;color:white" href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add Product</a>

    <table class="table table-bordered">
        <thead style="background-color:red; color:white">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Code</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Product Category</th>
                <th>Manufactured Date</th>
                <th>Product Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <livewire:products.record :$product :key="$product->id">
            @empty
                <tr><td colspan="6" class="text-center">No products available right now.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
