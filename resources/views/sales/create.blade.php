@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Sale</h2>

    <form action="{{ route('sales.store') }}" method="POST">
        @csrf

        @include('sales.form')

        <button type="submit" class="btn btn-success">Save Sale</button>
        <a href="{{ route('sales.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection