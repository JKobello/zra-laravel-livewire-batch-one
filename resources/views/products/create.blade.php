<x-layouts.app :title="'Products'">
    <h1>Create Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        @include('partials.products.form', ['buttonText' => 'Save Product'])

    </form>

</x-layouts.app>
