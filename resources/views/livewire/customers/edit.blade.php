<div>
    <h1>Edit Customer</h1>

    <form wire:submit.prevent="update">
        @csrf
        @method('PUT')

        @include('partials.customer-form', ['buttonText' => 'Update Customer'])

    </form>
</div>
