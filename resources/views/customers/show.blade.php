<x-layouts.app :title="'Customers'">
    <h1>{{ $customer->name }}</h1>
    <ul class="list-group">
        <li class="list-group-item"><strong>Company name:</strong> {{ $customer->company_name }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ $customer->email }}</li>
        <li class="list-group-item"><strong>Phone number:</strong> {{ $customer->phone_number }}</li>
        <li class="list-group-item"><strong>Account balance:</strong> {{ $customer->account_balance }}</li>
        <li class="list-group-item"><strong>Country:</strong> {{ $customer->country }}</li>
    </ul>

    <a href="{{ route('customers.index') }}" class="btn btn-primary mt-3">Back</a>
</x-layouts.app>
