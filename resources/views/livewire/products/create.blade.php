<div>
    <h1>Create Product</h1>

    <form wire:submit.prevent="store">
        @csrf

        @include('partials.product-form', ['buttonText' => 'Save Product', 'product' => null])

    </form>
</div>
