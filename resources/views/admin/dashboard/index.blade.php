<x-app-layout>
    <x-slot name="header">
        <span class="text-indigo-800 font-bold">{{ Auth::user()->name }} Dashboard</span>
    </x-slot>

    <div class="rounded-lg shadow-xs">
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs border-1 shadow-md hover:bg-indigo-50">
                <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="size-6">
                        <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                        <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                    </svg>

                </div>
                <div>
                    <p class="mb-2 text-sm font-medium">
                        Total User
                    </p>
                    <p class="text-md font-semibold">
                        {{ $users->total() }}
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs border-1 shadow-md hover:bg-indigo-50">
                <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-pink-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="size-6">
                        <path fill-rule="evenodd" d="M5.25 2.25a3 3 0 0 0-3 3v4.318a3 3 0 0 0 .879 2.121l9.58 9.581c.92.92 2.39 1.186 3.548.428a18.849 18.849 0 0 0 5.441-5.44c.758-1.16.492-2.629-.428-3.548l-9.58-9.581a3 3 0 0 0-2.122-.879H5.25ZM6.375 7.5a1.125 1.125 0 1 0 0-2.25 1.125 1.125 0 0 0 0 2.25Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium">
                        Total Kategori
                    </p>
                    <p class="text-md font-semibold">
                        {{ $categories->total() }}
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs border-1 shadow-md hover:bg-indigo-50">
                <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="size-6">
                        <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium">
                        Total Order
                    </p>
                    <p class="text-md font-semibold">
                        {{ $orders->count() }}
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs border-1 shadow-md hover:bg-indigo-50">
                <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-purple-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="size-6">
                        <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.865-2.071l-1.263-12a1.875 1.875 0 0 0-1.865-1.679H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 8.25a3 3 0 1 0 6 0v-.75a.75.75 0 0 1 1.5 0v.75a4.5 4.5 0 1 1-9 0v-.75a.75.75 0 0 1 1.5 0v.75Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium">
                        Total Course
                    </p>
                    <p class="text-md font-semibold">
                        {{ $courses->total() }}
                    </p>
                </div>
                <!-- Card -->
            </div>
        </div>
        <div class="transaction-history shadow-lg rounded-lg overflow-hidden">
            <h1 class="mb-3 text-indigo-800 font-bold ml-4 mt-3">Latest Order</h1>
            <table class="w-full whitespace-no-wrap shadow-xl text-sm text-center rtl:text-right text-gray-500">
                <thead class="text-xs font-semibold tracking-wide text-center text-white bg-indigo-800 uppercase">
                    <tr class="">
                        <th class="px-4 py-3 text-left w-[150px]">No</th>
                        <th class="px-4 py-3">Purchase Date</th>
                        <th class="px-4 py-3">Customer Name</th>
                        <th class="px-4 py-3">Transaction Status</th>
                        <th class="px-4 py-3">Amount</th>
                        <th class="px-4 py-3">Donation</th>
                        <th class="px-4 py-3">Total</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-gray-200 text-black">
                    @foreach ($orders as $order)
                    <tr>
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">{{ $order->created_at->format('d-m-Y') }}</td>
                        <td class="px-6 py-4">{{ $order->user->name }}</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2 py-1 font-bold text-white bg-green-600 rounded-md capitalize">
                                {{ $order->status }}
                            </span>
                        </td>
                        <td class="px-6 py-4">${{ $order->amount }}</td>
                        <td class="px-6 py-4">${{ $order->donation}}</td>
                        <td class="px-6 py-4">${{ number_format($order->amount + $order->donation, 2) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>