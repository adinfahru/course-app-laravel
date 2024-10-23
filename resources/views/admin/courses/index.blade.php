<x-app-layout>
    <x-slot name="header">
        {{ __('Courses') }}
    </x-slot>
    <div class="p-4 mt-4 bg-white rounded-lg shadow-xs border">
        <div class="flex justify-end gap-3">
            <div class="flex items-center justify-end mb-6">
                <a href="{{ route('admin.courses.create') }}" class="rounded-md bg-indigo-600 px-6 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add Course</a>
            </div>
        </div>

        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs border">
            <div class="w-full overflow-x-auto shadow-xs">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-white bg-indigo-800 border">
                            <th class="px-4 py-3">Title</th>
                            <th class="px-4 py-3">Category</th>
                            <th class="px-4 py-3">Author</th>
                            <th class="px-4 py-3">Price</th>
                            <th class="px-4 py-3">Image</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-300 dark:bg-gray-50">
                        @forelse ($courses as $course)
                        <tr class="text-gray-700 dark:text-gray-600">
                            <td class="px-4 py-3">
                                <div class="text-sm font-semibold">{{ $course->title }}</div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $course->category->category_name ?? 'No category' }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $course->author }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                Rp. {{ number_format($course->price, 2) }}
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    @if ($course->image)
                                    <div class="relative hidden w-24 h-24 mr-3 rounded md:block">
                                        <img src="{{ asset('storage/' . $course->image) }}" class="object-cover w-full h-full rounded" />
                                        <div class="absolute inset-0 rounded shadow-inner" aria-hidden="true"></div>
                                    </div>
                                    @else
                                    <p class="text-sm text-gray-400">No Image</p>
                                    @endif
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center space-x-4 text-sm">
                                    <a href="{{ route('admin.courses.edit', $course->id) }}" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                        </svg>
                                    </a>
                                    <form id="delete-course-form-{{ $course->id }}" action="{{ route('admin.courses.destroy', $course->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <button onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this course?')) { document.getElementById('delete-course-form-{{ $course->id }}').submit(); }" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-sm px-4 py-6 bg-white dark:text-gray-400">No courses available!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="mt-4 flex justify-center">
                    {{ $courses->links() }}
                </div>
            </div>
        </div>
    </div>
    <script>
        function closeAlert() {
            var alert = document.getElementById('alert');
            alert.style.display = 'none';
        }
    </script>
</x-app-layout>