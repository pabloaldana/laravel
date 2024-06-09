@extends('layouts.app')
@section('content')

    <div class="flex flex-col items-center justify-center min-h-screen pt-4 bg-black bg-opacity-30">
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($posts as $post)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden min-h-[300px]">
                    <div class="p-4 flex flex-col justify-between h-full">
                        <div class="bg-slate-200 p-2 text-blue-700 text-xl font-bold mb-2 text-center">{{ $post->titulo }}</div>
                        <div class="text-black-200 text-m mb-4">{!! Str::limit(strip_tags($post->texto), 200) !!}</div>
                        <div class="text-blue-700 text-l font-bold mb-2">Texto para {{$post->grado}} grado</div>
                        <a href="/area/post/{{$post->id}}" class="text-blue-500 text-right hover:underline">Seguir Leyendo...</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @include('components.boton-volver')

    </div>
@endsection