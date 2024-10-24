<x-app-layout>
    <x-slot name="header">
        {{ __('My Course') }}
    </x-slot>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 py-8">
        @if($purchasedCourses->isEmpty())
        <p class="text-center text-gray-500">You have not purchased any courses yet.</p>
        @else
        @foreach($purchasedCourses as $course)
        @if($course)
        <a href="{{ route('courses.show', $course->id) }}" class="relative block overflow-hidden rounded-lg border shadow-md border-gray-300 p-4 sm:p-6 lg:p-8 hover:bg-indigo-50">
            <div class="sm:flex sm:justify-between sm:gap-4">
                <div>
                    <h3 class="text-lg font-bold text-gray-900 sm:text-xl">{{ $course->title }}</h3>
                    <p class="mt-1 text-xs font-medium text-gray-600">By {{ $course->author }}</p>
                </div>

                <div class="hidden sm:block sm:shrink-0">
                    @if($course->image)
                    <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}" class="size-16 rounded-lg object-cover shadow-sm" />
                    @endif
                </div>
            </div>

            <div class="mt-4">
                <p class="text-sm text-gray-500">{{ $course->description }}</p>
            </div>

            <dl class="mt-6 flex gap-4 sm:gap-6">
                <div class="flex flex-col-reverse">
                    <dt class="text-sm font-medium text-gray-600">Price</dt>
                    <dd class="text-xs text-gray-500">${{ $course->price }}</dd>
                </div>
            </dl>
        </a>
        @else
        @endif
        @endforeach
        @endif
    </div>
</x-app-layout>