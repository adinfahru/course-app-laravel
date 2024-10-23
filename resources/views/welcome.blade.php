<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>MyCourse</title>

</head>

<body class="antialiased">
    @include('layouts.navbar')
    <section class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 py-32 lg:items-center">
            <div class="mx-auto max-w-xl text-center">
                <h1 class="text-3xl font-extrabold sm:text-5xl">
                    Achieve your goals with
                    <strong class="font-extrabold text-indigo-800 mt-2 sm:block">MyCourse Premium</strong>
                </h1>

                <p class="mt-4 sm:text-xl/relaxed">
                    Learn from 325+ top instructor and companies
                </p>

                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <a
                        class="block w-full rounded bg-indigo-800 px-12 py-3 text-sm font-medium text-white shadow hover:bg-indigo-500 focus:outline-none focus:ring sm:w-auto"
                        href="{{route('register')}}">
                        Register Now
                    </a>

                    <a
                        class="block w-full rounded px-12 py-3 text-sm font-medium text-indigo-800 shadow hover:text-indigo-500 focus:outline-none focus:ring active:text-red-500 sm:w-auto"
                        href="#">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

</body>

</html>