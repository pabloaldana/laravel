<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>{{ $area->nombre }} - Posts</title>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">{{ $area->nombre }}</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($posts as $post)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-4">
                    <h2 class="text-lg font-bold">{{ $post->titulo }}</h2>
                    <p>{{ $post->texto }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>