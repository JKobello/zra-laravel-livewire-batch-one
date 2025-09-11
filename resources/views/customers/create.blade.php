<x-layouts.app :title="'Customers'">
    <h1>Create Customer</h1>

    <form action="{{ route('customers.store') }}" method="POST">
        @csrf

        @include('partials.customers.form', ['buttonText' => 'Save Customer'])

    </form>

</x-layouts.app>
