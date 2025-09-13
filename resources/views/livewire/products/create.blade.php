<div>
    <h1>Create Product</h1>

    <form wire:submit.prevent="store">
        @csrf

        @include('partials.form', ['buttonText' => 'Save Product'])

    </form>
</div>
