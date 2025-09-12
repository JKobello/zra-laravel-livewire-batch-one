<x-layouts.app.sidebar :title="'Edit Sale'">
    <flux:main>
        <h2>Edit Sale</h2>

        <form action="{{ route('sales.update', $sale->id) }}" method="POST">
            @csrf @method('PUT')

            @include('sales.form', ['sale' => $sale])

            <button type="submit" class="btn btn-primary">Update Sale</button>
            <a href="{{ route('sales.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </flux:main>
</x-layouts.app.sidebar>
