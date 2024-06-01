<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Laravel</title>
</head>

<body class="dark:bg-gray-900">
    <!-- Navigation -->
    @if (Route::has('login'))
    <div class="w-full bg-gray-100 dark:bg-gray-800 p-6 text-right z-10 fixed top-0 left-0">
        @auth
        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
        @endif
        @endauth
    </div>
    @endif

    <!-- Content -->
    <div class="flex flex-col items-center justify-center min-h-screen pt-24">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full max-w-4xl px-4">
            <a href="/naturales" class="relative h-64 w-full dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <img src="{{ asset('images/areas/naturales.png') }}" alt="Naturales" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </a>
            <a href="/matematica" class="relative h-64 w-full dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <img src="{{ asset('images/areas/matematica.jpeg') }}" alt="Matemática" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </a>
            <a href="/lengua" class="relative h-64 w-full dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <img src="{{ asset('images/areas/lengua.png') }}" alt="Lengua" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </a>
            <a href="/literatura" class="relative h-64 w-full dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <img src="{{ asset('images/areas/literatura.png') }}" alt="Literatura" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </a>
            <a href="/historia" class="relative h-64 w-full dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <img src="{{ asset('images/areas/historia.png') }}" alt="Historia" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </a>
        </div>
    </div>
</body>

</html>