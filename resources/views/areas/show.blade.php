<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>{{ $area->nombre }} - Posts</title>
</head>

<body class="bg-gray-100" style="background-image: url('{{ asset('images/fondos/fondo1.jpg') }}')">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">{{ $area->nombre }}</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($posts as $post)
            @if ($post->publicado)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden min-h-[300px]">
                <div class="p-4 flex flex-col justify-between h-full">
                    <div class="bg-slate-200 p-2 text-blue-700 text-xl font-bold mb-2 text-center">{{ $post->titulo }}</div>
                    <div class="text-black-200 text-m mb-4">{!! Str::limit(strip_tags($post->texto), 200) !!}</div>
                    <div class="text-blue-700 text-l font-bold mb-2">Texto para {{$post->grado}} grado</div>
                    <h1>{{$post->id}}</h1>
                    <a href="{{ route('posts.show', $post->id) }}" class="text-blue-500 text-right hover:underline">Seguir Leyendo...</a>
                </div>
            </div>
            @endif
            @endforeach
        </div>

    </div>
    <button onclick="history.back()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold rounded md:py-4 md:px-8 lg:py-6 lg:px-12 lg:text-2xl">
        Volver
    </button>
</body>

</html>