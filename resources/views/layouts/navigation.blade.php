<aside class="z-20 hidden w-64 overflow-y-auto bg-gray-100 md:block flex-shrink-0 shadow-md">
    <div class="py-4 text-gray-500 ">
        <a class="ml-6 text-lg font-bold text-gray-800" href="">
            My<span class="text-indigo-800">Course</span>
        </a>

        <ul class="mt-6">
            @can('admin')
            <li class="relative px-6 py-3 hover:bg-indigo-200 rounded-md">
                <x-nav-link href="{{ route('dashboard.index') }}" :active="request()->routeIs('dashboard.index')">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </x-slot>
                    {{ __('Dashboard') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3 hover:bg-indigo-200 rounded-md">
                <x-nav-link href="{{ route('admin.courses.index') }}" :active="request()->routeIs('admin.courses.index')">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                            </path>
                        </svg>
                    </x-slot>
                    {{ __('Courses') }}
                </x-nav-link>
            </li>


            <li class="relative px-6 py-3 hover:bg-indigo-200 rounded-md">
                <x-nav-link href="{{ route('categories.index') }}" :active="request()->routeIs('categories.index')">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                            </path>
                        </svg>
                    </x-slot>
                    {{ __('Category') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3 hover:bg-indigo-200 rounded-md">
                <x-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </x-slot>
                    {{ __('Users') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3 hover:bg-indigo-200 rounded-md">
                <x-nav-link href="{{ route('history.index') }}" :active="request()->routeIs('history.index')">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                            </path>
                        </svg>
                    </x-slot>
                    {{ __('History') }}
                </x-nav-link>
            </li>
            @endcan

        </ul>
    </div>
</aside>