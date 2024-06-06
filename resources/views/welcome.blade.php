<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Laravel</title>
</head>

<body class="bg-gray-200 dark:bg-gray-900">
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

    <!-- Title -->
    <div class="bg-blue-500 text-white text-center p-4 rounded-lg mt-24">
        <h1 class="text-3xl font-bold">Bienvenidos al Blog Educativo</h1>
    </div>

    <!-- Content -->
    <div class="flex flex-col items-center justify-center min-h-screen pt-4">
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($areas as $area)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden -h-[400px]">
                    <img src="images/areas/{{$area->nombre}}" alt="{{ $area->descripcion }}" class="w-full h-48 object-cover"> 
                    <div class="p-4">
                        <h2 class="text-lg font-bold">{{ $area->title }}</h2>
                        <a href="categoria/{{ $area->id }}" class="text-blue-500 mt-2 inline-block">Entrar al área de {{$area->descripcion}}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</body>

</html>
