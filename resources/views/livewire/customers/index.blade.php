

<div>

    <h1>Customers</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table table-bordered">
        <thead style="background-color:red; color:white">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Company Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Country</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->company_name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone_number }}</td>
                    <td>{{ $customer->country }}</td>
                    <td>
                        <a style="background-color:blue;color:white" href="{{ route('customers.show', $customer->id) }}" class="btn btn-info btn-sm ">View</a>
                        <button type="button" wire:click="destroy({{$customer}})" wire:confirm="Are you sure you want to delete this customer?" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" class="text-center">No customers found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
