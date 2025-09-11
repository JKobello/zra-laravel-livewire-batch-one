<x-layouts.app :title="'Customers'">
    <h1>Edit Customer</h1>

    <form action="{{ route('customers.update', $customer) }}" method="POST">
        @csrf
        @method('PUT')

        @include('partials.customers.form', ['buttonText' => 'Update Customer'])

    </form>
</x-layouts.app>
