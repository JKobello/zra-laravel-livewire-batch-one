<x-layouts.app :title="'Products'">
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')

        @include('partials.form', ['buttonText' => 'Update Product'])

    </form>
</x-layouts.app>
