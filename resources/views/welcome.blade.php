@extends('layouts.app')


@section('content')

<!-- Content with Background Image -->

    <div class="flex flex-col items-center justify-center min-h-screen pt-4 bg-black bg-opacity-30 ">
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($areas as $area)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden min-h-[300px]">
                    <a href="categoria/{{ $area->id }}">
                        <img src="images/areas/{{$area->nombre}}" alt="{{ $area->descripcion }}" class="w-full h-64 object-cover">
                    </a>
                    <div class="p-4 flex justify-center items-center">
                        <a href="categoria/{{ $area->id }}" class="text-blue-700 inline-block  text-xl font-bold">Entrar al área de {{$area->descripcion}}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection