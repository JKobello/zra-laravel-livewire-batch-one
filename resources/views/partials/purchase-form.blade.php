<!-- <div class="mb-3">
    <label for="supplier_id" class="form-label">Supplier Id</label>
    <input type="text" name="supplier_id" class="form-control" value="{{ old('supplier_id', $purchase->supplier_id ?? '0') }}">
    @error('supplier_id') <small class="text-danger">{{ $message }}</small> @enderror
</div> -->

<div class="mb-3">
    <label for="invoice_number" class="form-label">Invoice Number</label>
    <input type="text" name="invoice_number" class="form-control" value="{{ old('invoice_number', $purchase->invoice_number ?? '') }}">
    @error('invoice_number') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="purchase_order_number" class="form-label">Purchase Order Number</label>
    <input type="text" name="purchase_order_number" class="form-control" value="{{ old('purchase_order_number', $purchase->purchase_order_number ?? '') }}">
    @error('purchase_order_number') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <select name="status" id="status" class="form-control">
        <option value="pending" {{ old('status', $purchase->status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
        <option value="approved" {{ old('status', $purchase->status ?? '') == 'approved' ? 'selected' : '' }}>Approved</option>
        <option value="completed" {{ old('status', $purchase->status ?? '') == 'completed' ? 'selected' : '' }}>Completed</option>
        <option value="cancelled" {{ old('status', $purchase->status ?? '') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
    </select>
    @error('status') 
        <small class="text-danger">{{ $message }}</small> 
    @enderror
</div>

<div class="mb-3">
    <label for="payment_status" class="form-label">Payment Status</label>
    <select name="payment_status" id="payment_status" class="form-control">
        <option value="unpaid" {{ old('payment_status', $purchase->payment_status ?? 'unpaid') == 'unpaid' ? 'selected' : '' }}>Unpaid</option>
        <option value="partial" {{ old('payment_status', $purchase->payment_status ?? '') == 'partial' ? 'selected' : '' }}>Partial</option>
        <option value="paid" {{ old('payment_status', $purchase->payment_status ?? '') == 'paid' ? 'selected' : '' }}>Paid</option>
    </select>
    @error('payment_status') 
        <small class="text-danger">{{ $message }}</small> 
    @enderror
</div>


<div class="mb-3">
    <label for="payment_method" class="form-label">Payment Method</label>
    <input type="text" name="payment_method" class="form-control" value="{{ old('payment_method', $purchase->payment_method ?? '') }}">
    @error('payment_method') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="currency" class="form-label">Currency</label>
    <input type="text" name="currency" class="form-control" value="{{ old('currency', $purchase->currency ?? '') }}">
    @error('currency') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="total_amount" class="form-label">Total Amount</label>
    <input type="text" name="total_amount" class="form-control" value="{{ old('total_amount', $purchase->total_amount ?? '') }}">
    @error('total_amount') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="discount" class="form-label">Discount</label>
    <input type="text" name="discount" class="form-control" value="{{ old('discount', $purchase->discount ?? '') }}">
    @error('discount') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="tax" class="form-label">Tax</label>
    <input type="text" name="tax" class="form-control" value="{{ old('tax', $purchase->tax ?? '') }}">
    @error('tax') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
<a href="{{ route('purchases.index') }}" class="btn btn-secondary">Cancel</a>

