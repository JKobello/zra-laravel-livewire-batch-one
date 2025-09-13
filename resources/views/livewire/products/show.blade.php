<div>
    <h1>{{ $product->name }}</h1>
    <ul class="list-group">
        <li class="list-group-item"><strong>Code:</strong> {{ $product->code }}</li>
        <li class="list-group-item"><strong>Price:</strong> {{ $product->unit_price }}</li>
        <li class="list-group-item"><strong>Stock:</strong> {{ $product->stock }}</li>
        <li class="list-group-item"><strong>Type:</strong> {{ $product->type }}</li>
        <li class="list-group-item"><strong>Description:</strong> {{ $product->description }}</li>
    </ul>

    <a href="{{ route('products.index') }}" class="btn btn-primary mt-3">Back</a>
</div>
