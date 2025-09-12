<div class="mb-3">
    <label>Invoice Number</label>
    <input type="text" name="invoice_number" class="form-control" value="{{ old('invoice_number', $sale->invoice_number ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Customer Name</label>
    <input type="text" name="customer_name" class="form-control" value="{{ old('customer_name', $sale->customer_name ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Sale Date</label>
    <input type="datetime-local" name="sale_date" class="form-control" value="{{ old('sale_date', isset($sale) ? \Carbon\Carbon::parse($sale->sale_date)->format('Y-m-d\TH:i') : '') }}" required>
</div>

<div class="mb-3">
    <label>Total Amount</label>
    <input type="number" step="0.01" name="total_amount" class="form-control" value="{{ old('total_amount', $sale->total_amount ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Discount</label>
    <input type="number" step="0.01" name="discount" class="form-control" value="{{ old('discount', $sale->discount ?? 0) }}">
</div>

<div class="mb-3">
    <label>Tax</label>
    <input type="number" step="0.01" name="tax" class="form-control" value="{{ old('tax', $sale->tax ?? 0) }}">
</div>

<div class="mb-3">
    <label>Net Amount</label>
    <input type="number" step="0.01" name="net_amount" class="form-control" value="{{ old('net_amount', $sale->net_amount ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Payment Status</label>
    <select name="payment_status" class="form-control" required>
        <option value="Paid" {{ old('payment_status', $sale->payment_status ?? '') == 'Paid' ? 'selected' : '' }}>Paid</option>
        <option value="Pending" {{ old('payment_status', $sale->payment_status ?? '') == 'Pending' ? 'selected' : '' }}>Pending</option>
        <option value="Partial" {{ old('payment_status', $sale->payment_status ?? '') == 'Partial' ? 'selected' : '' }}>Partial</option>
    </select>
</div>

<div class="mb-3">
    <label>Payment Method</label>
    <input type="text" name="payment_method" class="form-control" value="{{ old('payment_method', $sale->payment_method ?? '') }}">
</div>

<div class="mb-3">
    <label>Notes</label>
    <textarea name="notes" class="form-control">{{ old('notes', $sale->notes ?? '') }}</textarea>
</div>