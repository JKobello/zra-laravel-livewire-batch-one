<x-layouts.app.sidebar :title="'Create Sale'">
    <flux:main>
        <h2>Create Sale</h2>
        <form action="{{ route('sales.store') }}" method="POST">
            @csrf

            @include('sales.form')

            <button type="submit" class="btn btn-success">Save Sale</button>
            <a href="{{ route('sales.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </flux:main>
</x-layouts.app.sidebar>
