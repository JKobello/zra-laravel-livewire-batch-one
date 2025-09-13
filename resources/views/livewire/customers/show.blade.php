<div>
    <h1>{{ $customer->name }}</h1>
    <ul class="list-group">
        <li class="list-group-item"><strong>Company Name:</strong> {{ $customer->company_name }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ $customer->email }}</li>
        <li class="list-group-item"><strong>Phone Number:</strong> {{ $customer->phone_number }}</li>
        <li class="list-group-item"><strong>Account Balance:</strong> {{ $customer->account_balance }}</li>
        <li class="list-group-item"><strong>Country:</strong> {{ $customer->country }}</li>
    </ul>

    <a style="background-color:grey;color:white" href="{{ route('customers.index') }}" class="btn btn-primary mt-3">Back</a>
</div>
