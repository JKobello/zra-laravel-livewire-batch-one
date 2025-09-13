<div>
<tr wire:key="{{ $product->id }}">
    <td>{{ $product->name }}</td>
    <td>{{ $product->code }}</td>
    <td>{{ $product->unit_price }}</td>
    <td>{{ $product->stock }}</td>
    <td>{{ $product->type }}</td>
    <td>
        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">View</a>
        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <button
            type="button"
            wire:click="destroy({{ $product->id }})"
            wire:confirm="Are you sure you want to delete this product?"
            >
            Delete
        </button>
    </td>
</tr>
</div>
