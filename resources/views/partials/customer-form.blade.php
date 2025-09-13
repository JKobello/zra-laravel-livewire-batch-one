<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $customer->name ?? '') }}">
    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="company_name" class="form-label">Company Name</label>
    <input type="text" name="company_name" class="form-control" value="{{ old('company_name', $customer->company_name ?? '') }}">
    @error('company_name') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" value="{{ old('email', $customer->email ?? '') }}">
    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="phone_number" class="form-label">Phone Number</label>
    <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number', $customer->phone_number ?? '') }}">
    @error('phone_number') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="account_balance" class="form-label">Account Balance</label>
    <input type="number" step="0.01" name="account_balance" class="form-control" value="{{ old('account_balance', $customer->account_balance ?? '') }}">
    @error('account_balance') <small class="text-danger">{{ $message }}</small> @enderror
</div>


<div class="mb-3">
    <label for="country" class="form-label">Country</label>
    <input type="text" name="country" class="form-control" value="{{ old('country', $customer->customer ?? '') }}">
    @error('Country') <small class="text-danger">{{ $message }}</small> @enderror
</div>


<button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
<a href="{{ route('customers.index') }}" class="btn btn-secondary">Cancel</a>
