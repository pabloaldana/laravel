@extends('layouts.app')


@section('content')

<!-- Content with Background Image -->


    <div class="flex flex-col items-center justify-center min-h-screen pt-4 bg-black bg-opacity-30 ">
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

            

                @foreach($areas as $area)
                <?php //print_r($area); ?>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden min-h-[300px]">
                    <a href="areas/{{ $area->id }}">
                        <img  src="{{ str_replace('public/', '', $area->image) }}" alt="{{$area->nombre}}" class="w-full h-64 object-cover">
                    </a>
                    <div class="p-4 flex justify-center items-center">
                        <a href="areas/{{ $area->id }}" class="text-blue-700 inline-block  text-xl font-bold">Entrar al área de {{$area->nombre}}</a>
                    </div>
                </div>
                @endforeach
            </div>
           
        </div>
    </div>


@endsection