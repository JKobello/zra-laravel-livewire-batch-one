<div>
    <h1>Edit Product</h1>

    <form wire:submit.prevent="update">
        @csrf
        @method('PUT')

        @include('partials.form', ['buttonText' => 'Update Product'])

    </form>
</div>
