<form method="POST" action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}">
    @csrf
    @if(isset($category)) @method('PUT') @endif

    <div class="mb-3">
        <label for="name">Category Name</label>
        <input type="text" name="name" class="form-control"
               value="{{ old('name', $category->name ?? '') }}" required>
    </div>

    <button type="submit" class="btn btn-success">
        {{ isset($category) ? 'Update' : 'Create' }}
    </button>
</form>