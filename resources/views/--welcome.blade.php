<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Pizarra</title>
</head>

<body style="background-image: url('{{ asset('images/fondos/fondo1.jpg') }}')">

    @if (Route::has('login'))
    <div class="w-full bg-gray-100 dark:bg-gray-800 p-6 text-right z-10 fixed top-0 left-0">
        @auth
        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Mi Perfil</a>
        @else
        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
        @endif
        @endauth
    </div>
    @endif

    <div class="flex flex-col items-center justify-center min-h-screen pt-4">
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($areas as $area)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden min-h-[300px]">
                    <a href="{{ route('areas.show', $area->id) }}">
                        <img src="{{ Storage::url($area->image) }}" alt="{{ $area->nombre }}" class="w-full h-64 object-cover">
                    </a>
                    <div class="p-4 flex justify-center items-center">
                        <a href="{{ route('areas.show', $area->id) }}" class="text-blue-700 inline-block text-xl font-bold">Entrar al área de {{ $area->nombre }}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>