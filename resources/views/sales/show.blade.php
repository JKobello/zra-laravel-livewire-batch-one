@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Sale Details</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Invoice #:</strong> {{ $sale->invoice_number }}</p>
            <p><strong>Customer:</strong> {{ $sale->customer_name }}</p>
            <p><strong>Date:</strong> {{ $sale->sale_date }}</p>
            <p><strong>Total:</strong> {{ $sale->total_amount }}</p>
            <p><strong>Discount:</strong> {{ $sale->discount }}</p>
            <p><strong>Tax:</strong> {{ $sale->tax }}</p>
            <p><strong>Net Amount:</strong> {{ $sale->net_amount }}</p>
            <p><strong>Status:</strong> {{ $sale->payment_status }}</p>
            <p><strong>Method:</strong> {{ $sale->payment_method }}</p>
            <p><strong>Notes:</strong> {{ $sale->notes }}</p>
        </div>
    </div>

    <a href="{{ route('sales.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection