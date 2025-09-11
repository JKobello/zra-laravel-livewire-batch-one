<x-layouts.app :title="'Purchases'">
    <h1>Create Purchases</h1>

    <form action="{{ route('purchases.store') }}" method="POST">
        @csrf

        @include('partials.purchase-form', ['buttonText' => 'Save Purchases'])

    </form>

</x-layouts.app>
