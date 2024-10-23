<x-app-layout>
    <div class="p-4 mt-4 bg-white rounded-lg shadow-xs border">
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="category_name" class="block text-sm font-medium text-gray-700">Category Name</label>
                <input type="text" name="category_name" id="category_name" class="mt-1 block w-full" value="{{ old('category_name', $category->category_name) }}" required>
            </div>
            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
</x-app-layout>