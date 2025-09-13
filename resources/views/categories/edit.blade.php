<x-layouts.app.sidebar :title="isset($category) ? 'Edit Category' : 'Create Category'">
    <flux:main>
        <div class="space-y-4">
            <h2 class="text-xl font-semibold">
                {{ isset($category) ? 'Edit Category' : 'Create Category' }}
            </h2>

            @include('categories._form', ['category' => $category ?? null])
        </div>
    </flux:main>
</x-layouts.app.sidebar>