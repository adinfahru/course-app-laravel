<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Pos Koperasi</title>

</head>

<body class="antialiased">
    @include('layouts.navbar')
    <section>
        <div class="px-8 py-16 mx-auto md:px-12 lg:px-32 max-w-7xl">
            <div>
                <h1 class="text-xl font-bold tracking-tighter text-indigo-900 lg:text-6xl text-balance">
                    Ekonomi Sejahtera
                    <span class="text-indigo-800">Bersama Koperasi Jaya</span>
                </h1>
                <p class="italic mt-4 text-base font-medium text-indigo-800 text-balance">
                    " Maju terus Koperasi Indonesia, sejahtera rakyat Indonesia "
                </p>
            </div>
            <div class="space-y-2">
                <div class="grid gap-2 mt-12 mb-8 lg:grid-flow-col-dense lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-1">
                    <div class="max-w-lg min-w-full mx-auto">
                        <div class="flex h-full">
                            <div class="flex flex-col justify-center p-8 border bg-indigo-50 rounded-3xl max-w-none">
                                <h2 class="font-medium text-gray-900">
                                    Welcome to Koperasi Jaya, your gateway to economic prosperity and community empowerment.
                                    Our platform stands as a beacon of hope, championing the ideals of shared prosperity and collaborative growth.
                                    With the tagline "Ekonomi Sejahtera Bersama Koperasi Jaya," we are committed to fostering economic well-being and
                                    ensuring a prosperous future for all.
                                </h2>
                                <p class="mt-4 text-sm font-medium text-gray-500 text-pretty">
                                    Join us in our mission to build a brighter tomorrow, where economic prosperity is not just a dream but a reality for all.
                                    Together, let's create a future of shared success and prosperity. Ekonomi Sejahtera Bersama Koperasi Jaya!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2">
                        <div>
                            <div class="relative h-full p-2 overflow-hidden border rounded-3xl">
                                <img src="{{ asset('images/Koperasi-Logo.png') }}" class="object-cover border shadow-2xl rounded-2xl" width="300" height="200">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>