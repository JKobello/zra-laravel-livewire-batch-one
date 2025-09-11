<x-layouts.app :title="'Purchases'">
    <h1>Edit Purchase</h1>

    <form action="{{ route('purchases.update', $purchase) }}" method="POST">
        @csrf
        @method('PUT')

        @include('partials.purchase-form', ['buttonText' => 'Update Purchase'])

    </form>
</x-layouts.app>
