<div>
    <h1>Create Customer</h1>

    <form wire:submit.prevent="store">
        @csrf

        @include('partials.customer-form', ['buttonText' => 'Save Customer'])

    </form>
</div>
