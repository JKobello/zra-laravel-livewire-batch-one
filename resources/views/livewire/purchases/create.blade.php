<div>
    <h1>Create Purchases</h1>

    <form wire:submit.prevent="store">
        @csrf

        @include('partials.purchase-form', ['buttonText' => 'Save Purchases'])

    </form>
</div>
