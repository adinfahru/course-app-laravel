<x-app-layout>
    <div class="container mx-auto py-12 gap-4 flex flex-col md:flex-row">
        <!-- Video Section -->
        <div class="w-full md:w">
            @if($course->video)
            @php
            // Extract the video ID from the URL using regex
            preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $course->video, $matches);
            $videoId = $matches[1] ?? null;
            $embedLink = $videoId ? 'https://www.youtube.com/embed/' . $videoId : null;
            @endphp

            @if($embedLink)
            <div class="flex justify-center">
                <iframe width="100%" height="360" src="{{ $embedLink }}" frameborder="0" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="rounded-lg shadow-sm"></iframe>
            </div>
            @endif
            @endif
        </div>

        <!-- Course Information Section -->
        <div class="mt-6 w-full md:w-1/2 md:mt-0 md:pl-6 flex flex-col items-center md:items-start">
            <h2 class="text-2xl font-bold text-gray-900 text-center md:text-left">{{ $course->title }}</h2>
            <p class="mt-2 text-xs font-medium text-gray-600 text-center md:text-left">Author: {{ $course->author }}</p>
            <p class="mt-4 text-sm text-gray-500 text-center md:text-left">{{ $course->description }}</p>
        </div>
    </div>
</x-app-layout>