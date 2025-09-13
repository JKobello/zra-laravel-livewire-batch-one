<x-layouts.app.sidebar :title="'Category Details'">
    <flux:main>
        <div class="space-y-4">
            <h2 class="text-xl font-semibold">Category Details &nbsp; &nbsp;
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
            </h2>
            <p><strong>Category name:</strong> {{ strtoupper($category->name) }}</p>
        </div>
        <livewire:products.index :products="$category->products">
    </flux:main>
</x-layouts.app.sidebar>
