<x-layouts.app.sidebar :title="'Category Details'">
    <flux:main>
        <div class="space-y-4">
            <h2 class="text-xl font-semibold">Category Details</h2>

            <p><strong>Name:</strong> {{ $category->name }}</p>

            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </flux:main>
</x-layouts.app.sidebar>