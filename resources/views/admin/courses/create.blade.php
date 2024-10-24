<x-app-layout>
    <div class="p-4 mt-4 bg-white rounded-lg shadow-xs border">
        <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data"> <!-- Added enctype for file upload -->
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Course Title</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('title') }}" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('description') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="number" name="price" id="price" step="0.01" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('price') }}" required>
            </div>

            <div class="mb-4">
                <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                <input type="text" name="author" id="author" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('author') }}" required>
            </div>

            <div class="mb-4">
                <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                <select name="category_id" id="category_id" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    <option value="">Select a category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input required type="file" name="image" id="image" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" accept="image/*"> <!-- Accepts image files -->
            </div>

            <div class="mb-4">
                <label for="video" class="block text-sm font-medium text-gray-700">Video</label>
                <input type="text" name="video" id="video" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('youtube_link') }}" placeholder="https://www.youtube.com/watch?v=example" required>
            </div>

            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Save</button>
        </form>
    </div>
</x-app-layout>