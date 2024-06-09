@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>

    <div class="container">
        <h1 class="text-3xl font-bold mb-4">{{ $area->nombre }}</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($posts as $post)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <!-- Display post details here -->
                <div class="p-4">
                    <h2 class="text-lg font-bold">{{ $post->titulo }}</h2>
                    <p>{{ $post->texto }}</p>
                </div>
            </div>
            @endforeach
        </div>

</x-app-layout>