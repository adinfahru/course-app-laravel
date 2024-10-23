<x-app-layout>
    <div class="container mx-auto py-12">
        <div class="flex flex-col md:flex-row gap-6 items-center justify-center">
            <!-- Image Section -->
            <div class="md:w">
                @if($course->image)
                <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}" class="rounded-lg object-cover shadow-sm w-full h-80">
                @endif
            </div>

            <!-- Course Information Section -->
            <div class="w-full md:w-1/4 flex flex-col items-center md:items-start">
                <h2 class="text-2xl font-bold text-gray-900 text-center md:text-left">{{ $course->title }}</h2>
                <p class="mt-2 text-xs font-medium text-gray-600 text-center md:text-left">By {{ $course->author }}</p>
                <p class="mt-4 text-sm text-gray-500 text-center md:text-left">{{ $course->description }}</p>
                <p class="mt-4 text-lg font-semibold">Price: ${{ $course->price }}</p>

                <!-- Buttons Section -->
                <div class="mt-6 flex gap-4">
                    <form action="{{ route('checkout', $course->id) }}" method="GET">
                        @csrf
                        <button type="submit" class="inline-block px-4 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg">Buy Now</button>
                    </form>
                </div>

                <a href="{{ route('courses.index') }}" class="mt-4 inline-block text-blue-500 hover:underline text-center">Back to Courses</a>
            </div>
        </div>

    </div>
</x-app-layout>