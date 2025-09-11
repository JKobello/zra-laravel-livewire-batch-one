<x-layouts.app :title="'Products'">
    @if(session('success'))
        <div style="background-color:green;color:white">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div style="background-color:red;color:white">{{ session('error') }}</div>
    @endif

    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')

        @include('partials.product-form', ['buttonText' => 'Update Product'])

    </form>
</x-layouts.app>
