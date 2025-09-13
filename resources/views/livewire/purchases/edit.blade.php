<div>
    <h1>Edit Purchase</h1>

    <form wire:submit.prevent="update">
        @csrf
        @method('PUT')

        @include('partials.purchase-form', ['buttonText' => 'Update Purchase'])

    </form>

</div>
