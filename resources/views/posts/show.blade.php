
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Posteo: {{ $post->titulo }}
        </h2>
        <a href="{{ route('posts.edit', $post->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Editar Post
        </a>
        <a href="{{ route('posts.edit', $post->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Eliminar Post
        </a>

    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200">
                <div class="font-bold text-2xl mb-4 text-gray-800 dark:text-gray-200">{{ $post->titulo }}</div>
                <p class="text-gray-700 dark:text-gray-300 text-base">
                    {{ $post->texto }}
                </p>
                <div class="mt-4">
                    <span class="inline-block bg-blue-500 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2">Grado: {{ $post->grado }}</span>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>