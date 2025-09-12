<div>
    <h1>{{ $product->name }}</h1>
    <ul class="list-group">
        <li class="list-group-item"><strong>Code:</strong> {{ $product->code }}</li>
        <li class="list-group-item"><strong>Price:</strong> {{ $product->unit_price }}</li>
        <li class="list-group-item"><strong>Stock:</strong> {{ $product->stock }}</li>
        <li class="list-group-item"><strong>Type:</strong> {{ $product->type }}</li>
        <li class="list-group-item"><strong>Description:</strong> {{ $product->description }}</li>
        <li class="list-group-item"><strong>Manufactured Date:</strong> {{ $product->mf_date }}</li>
        <li class="list-group-item"><strong>Product Image:</strong>
            @if($product->photo)
                <img src="{{ asset('storage/' . $product->photo) }}" width="80" class="img-thumbnail">
            @else
                <span>No Photo</span>
            @endif
        </li>
    </ul>

    <a style="background-color:grey;color:white" href="{{ route('products.index') }}" class="btn btn-primary mt-3">Back</a>
</div>
