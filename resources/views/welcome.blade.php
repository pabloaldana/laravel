<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Pizarra</title>
</head>

<body class="dark:bg-gray-900">

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

    <div class="pt-24">
        <h1 class="text-center text-4xl font-bold text-gray-800 dark:text-gray-200">ACA TENER LAS CATEGORIAS PARA Q LAS PUEDAN VER TODOS ANTES DE LOG</h1>

    </div>
</body>

</html>