<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
                Posts de {{ $area->nombre }}
            </h2>
        </div>
    </x-slot>
    <div class="background-image min-h-screen bg-gray-200 flex items-center justify-center">
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($posts as $post)
                @if($post->publicado)
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
            @include('components.boton-volver')  

        </div>
    </div>
</x-app-layout>