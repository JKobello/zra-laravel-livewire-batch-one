

<div>

    <h1>Products</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table table-bordered">
        <thead style="background-color:red; color:white">
            <tr>
                <th>ID</th>
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
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->unit_price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->type }}</td>
                    <td>
                        <a style="background-color:blue;color:white" href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm ">View</a>
                        <button type="button" wire:click="destroy({{$product}})" wire:confirm="Are you sure you want to delete this product?" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" class="text-center">No products found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
