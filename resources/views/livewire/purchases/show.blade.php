<div>
    <h1>{{ $purchase->purchase_order_number }}</h1>
    <ul class="list-group">
        <!-- <li class="list-group-item"><strong>Supplier ID:</strong> {{ $purchase->supplier_id }}</li> -->
        <li class="list-group-item"><strong>Invoice Number:</strong> {{ $purchase->invoice_number }}</li>
        <li class="list-group-item"><strong>Purchase Order Number:</strong> {{ $purchase->purchase_order_number }}</li>
        <li class="list-group-item"><strong>Status:</strong> {{ $purchase->status }}</li>
        <li class="list-group-item"><strong>Payment Status:</strong> {{ $purchase->payment_status }}</li>
        <li class="list-group-item"><strong>Payment Method:</strong> {{ $purchase->payment_method }}</li>
        <li class="list-group-item"><strong>Total Amount:</strong> {{ $purchase->total_amount }}</li>
        <li class="list-group-item"><strong>Discount:</strong> {{ $purchase->discount }}</li>
        <li class="list-group-item"><strong>Tax:</strong> {{ $purchase->tax }}</li>
        <li class="list-group-item"><strong>Currency:</strong> {{ $purchase->currency }}</li>
    </ul>

    <a href="{{ route('purchases.index') }}" class="btn btn-primary mt-3">Back</a>
</div>
