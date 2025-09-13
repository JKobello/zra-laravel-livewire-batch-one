<div class="mb-3">
    <label for="invoice_number" class="form-label">Invoice Number</label>
    <input type="text" wire:model="invoice_number" class="form-control" >
    @error('invoice_number') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="purchase_order_number" class="form-label">Purchase Order Number</label>
    <input type="text" wire:model="purchase_order_number" class="form-control" >
    @error('purchase_order_number') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <select wire:model="status" id="status" class="form-control">
        <option value="pending">Pending</option>
        <option value="approved">Approved</option>
        <option value="completed">Completed</option>
        <option value="cancelled">Cancelled</option>
    </select>
    @error('status') 
        <small class="text-danger">{{ $message }}</small> 
    @enderror
</div>

<div class="mb-3">
    <label for="payment_status" class="form-label">Payment Status</label>
    <select wire:model="payment_status" id="payment_status" class="form-control">
        <option value="unpaid">Unpaid</option>
        <option value="partial">Partial</option>
        <option value="paid">Paid</option>
    </select>
    @error('payment_status') 
        <small class="text-danger">{{ $message }}</small> 
    @enderror
</div>


<div class="mb-3">
    <label for="payment_method" class="form-label">Payment Method</label>
    <input type="text" wire:model="payment_method" class="form-control" >
    @error('payment_method') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="currency" class="form-label">Currency</label>
    <input type="text" wire:model="currency" class="form-control" >
    @error('currency') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="total_amount" class="form-label">Total Amount</label>
    <input type="text" wire:model="total_amount" class="form-control" >
    @error('total_amount') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="discount" class="form-label">Discount</label>
    <input type="text" wire:model="discount" class="form-control" >
    @error('discount') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="tax" class="form-label">Tax</label>
    <input type="text" wire:model="tax" class="form-control" >
    @error('tax') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
<a href="{{ route('purchases.index') }}" class="btn btn-secondary">Cancel</a>

