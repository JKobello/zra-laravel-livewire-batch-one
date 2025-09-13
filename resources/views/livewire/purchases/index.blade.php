<div>
    <h1>Purchases</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <a href="{{ route('purchases.create') }}" class="btn btn-primary mb-3">Add Purchase</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <!-- <th>Supplier Id</th> -->
                <th>Invoice Number</th>
                <th>Purchase Order Number</th>
                <th>Status</th>
                <th>Payment Status</th>
                <th>Payment Method</th>
                <th>Total Amount</th>
                <th>Discount</th>
                <th>Tax</th>
                <th>Currency</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($purchases as $purchase)
                <tr wire:key="{{ $purchase->id }}">
                    <!-- <td>{{ $purchase->supplier_id }}</td> -->
                    <td>{{ $purchase->invoice_number }}</td>
                    <td>{{ $purchase->purchase_order_number }}</td>
                    <td>{{ $purchase->status }}</td>
                    <td>{{ $purchase->payment_status }}</td>
                    <td>{{ $purchase->payment_method }}</td>
                    <td>{{ $purchase->total_amount }}</td>
                    <td>{{ $purchase->discount }}</td>
                    <td>{{ $purchase->tax }}</td>
                    <td>{{ $purchase->currency }}</td>
                    <td>
                        <a href="{{ route('purchases.show', $purchase->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('purchases.edit', $purchase->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <button
                            type="button"
                            wire:click="destroy({{ $purchase->id }})"
                            wire:confirm="Are you sure you want to delete this purchase?"
                            >
                            Delete
                        </button>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" class="text-center">No purchases found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
