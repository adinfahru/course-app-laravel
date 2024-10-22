<x-app-layout>
    <h1 class="text-2xl mt-5 font-semibold tracking-tighter text-gray-900">
        {{ __('Welcome back, ') }}
        <span class="text-indigo-800 font-bold">{{ Auth::user()->name }}!</span>
    </h1>
</x-app-layout>