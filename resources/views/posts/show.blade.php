<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>{{ $post->titulo }} - Posts</title>
</head>

<body class="bg-gray-100" style="background-image: url('{{ asset('images/fondos/fondo1.jpg') }}')">
    <div class="flex flex-col items-center justify-center min-h-screen pt-4 bg-black bg-opacity-30">
        <div class="container mx-auto mt-5 w-max">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h1 class="text-3xl font-bold mb-4 text-center">{{ $post->titulo }}</h1>
                <div class="text-blue-700 text-xl font-bold mb-4 text-left">Texto para {{$post->grado}} grado</div>
                <div class="text-black-200 text-2xl mb-4 text-align">{!! $post->texto !!}</div>

            </div>

        </div>
        <button onclick="history.back()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold  rounded md:py-4 md:px-8 lg:py-6 lg:px-12 lg:text-2xl mt-4">
            Volver
        </button>
    </div>

</body>

</html>