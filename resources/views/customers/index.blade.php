<x-layouts.app :title="'Customers'">

    <h1>Customers</h1>
<!--
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif -->



    <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">Add Customers</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Company Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Account Balance</th>
                <th>Country</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->company_name }}</td>
                    <td>{{ $customer->email}}</td>
                    <td>{{ $customer->phone_number }}</td>
                    <td>{{ $customer->account_balance }}</td>
                    <td>{{$customer->country}}</td>
                    
                    <td>
                        <a href="{{ route('customers.show', $customer) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('customers.edit', $customer) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('customers.destroy', $customer) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Delete this customers?')" class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" class="text-center">No customers found.</td></tr>
            @endforelse
        </tbody>
    </table>
</x-layouts.app>
