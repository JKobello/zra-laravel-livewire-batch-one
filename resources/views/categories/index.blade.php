<x-layouts.app.sidebar :title="'Categories'">
    <flux:main>
        <div class="space-y-4">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-semibold">Categories</h2>
                <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
            </div>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($categories->isEmpty())
                <p class="text-gray-500 dark:text-gray-300">No categories found.</p>
            @else
                <div class="overflow-x-auto">
                    <table class="table table-bordered w-full">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th class="w-48">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td class="space-x-2">
                                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline-block">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Delete this category?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $categories->links() }}
                </div>
            @endif
        </div>
    </flux:main>
</x-layouts.app.sidebar>