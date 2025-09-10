<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $product->name ?? '') }}">
    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="code" class="form-label">Code</label>
    <input type="text" name="code" class="form-control" value="{{ old('code', $product->code ?? '') }}">
    @error('code') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="unit_price" class="form-label">Price</label>
    <input type="number" step="0.01" name="unit_price" class="form-control" value="{{ old('unit_price', $product->unit_price ?? '') }}">
    @error('unit_price') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="stock" class="form-label">Stock</label>
    <input type="number" name="stock" class="form-control" value="{{ old('stock', $product->stock ?? '') }}">
    @error('stock') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="type" class="form-label">Type</label>
    <input type="text" name="type" class="form-control" value="{{ old('type', $product->type ?? '') }}">
    @error('type') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="discription" class="form-label">Description</label>
    <textarea name="discription" class="form-control">{{ old('discription', $product->discription ?? '') }}</textarea>
    @error('discription') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
<a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
