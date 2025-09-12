<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" wire:model="name" class="form-control">
    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="code" class="form-label">Code</label>
    <input type="text" wire:model="code" class="form-control">
    @error('code') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="unit_price" class="form-label">Price</label>
    <input type="number" step="0.01" wire:model="unit_price" class="form-control">
    @error('unit_price') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="stock" class="form-label">Stock</label>
    <input type="number" wire:model="stock" class="form-control">
    @error('stock') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="type" class="form-label">Type</label>
    <input type="text" wire:model="type" class="form-control">
    @error('type') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea wire:model="description" class="form-control"></textarea>
    @error('description') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<button style="background-color:blue;color:white" type="submit" class="btn btn-primary">{{ $buttonText }}</button>
<a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
