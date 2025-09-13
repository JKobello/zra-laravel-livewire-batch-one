<div>
    <h1>Products</h1>

    @if(session('success'))
        <div class="alert alert-success" style="background-color: green; color: white;">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger" style="background-color: red; color: white;">{{ session('error') }}</div>
    @endif

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add Product</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Code</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <!-- @livewire('products.record', ['product' => $product], key($product->id)) -->
                 <livewire:products.record :product="$product" :key="$product->id" />
            @empty
                <tr><td colspan="6" class="text-center">No products found.</td></tr>
            @endforelse
            <tr>
                <td colspan="6">
                    {{ $products->links() }}
                </td>
            </tr>
        </tbody>
    </table>
</div>
