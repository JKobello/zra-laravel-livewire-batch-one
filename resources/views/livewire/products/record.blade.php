<div>
    <tr wire:key="{{ $product->id }}">
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->code }}</td>
        <td>{{ $product->unit_price }}</td>
        <td>{{ $product->stock }}</td>
        <td>{{ $product->type }}</td>
        <td>{{ $product->photo }}</td>
        <td>
            <a style="background-color:blue;color:white" href="{{ route('products.show', $product) }}" class="btn btn-info btn-sm ">View</a>
            <a style="background-color:green;color:white" href="{{ route('products.edit', $product) }}" class="btn btn-info btn-sm ">Edit</a>
            <button type="button" wire:click="destroy({{$product}})" wire:confirm="Are you sure you want to delete this product?" class="btn btn-danger btn-sm">
                Delete
            </button>
        </td>
    </tr>
</div>
