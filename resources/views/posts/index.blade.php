<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Mis Posteos') }}
            </h2>
            <a href="{{ route('posts.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Crear Posteo
            </a>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg grid grid-cols-2 gap-10 p-10">
            @foreach ($posts as $post)
            <a href="{{ route('posts.show', $post->id) }}" class="block">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white dark:bg-gray-700">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2 text-gray-800 dark:text-gray-200">{{ $post->titulo }}</div>
                            <p class="text-gray-700 dark:text-gray-300 text-base">
                                {{ $post->texto }}
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span class="inline-block bg-blue-500 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2">Grado: {{ $post->grado }}</span>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>

</x-app-layout>