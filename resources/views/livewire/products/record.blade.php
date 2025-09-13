<tr wire:key="{{ $product->id }}">
    <td>{{ $product->id }}</td>
    <td>{{ $product->name }}</td>
    <td>{{ $product->code }}</td>
    <td>{{ $product->unit_price }}</td>
    <td>{{ $product->stock }}</td>
    <td>{{ $product->category_id }}</td>
    <td>{{ $product->mf_date }}</td>
    <td>
        @if($product->photo)
            <img src="{{ asset('storage/' . $product->photo) }}" width="80" class="img-thumbnail">
        @else
            <span>-No Photo-</span>
        @endif
    </td>

    <td>
        <a style="background-color:blue;color:white" href="{{ route('products.show', $product) }}" class="btn btn-info btn-sm ">View</a>
        <a style="background-color:green;color:white" href="{{ route('products.edit', $product) }}" class="btn btn-info btn-sm ">Edit</a>
        <button type="button" wire:click="$parent.destroy({{$product}})" wire:confirm="Are you sure you want to delete this product?" class="btn btn-danger btn-sm">
            Delete
        </button>
    </td>
</tr>

