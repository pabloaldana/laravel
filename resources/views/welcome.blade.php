@extends('layouts.app')


@section('content')

<!-- Content with Background Image -->
@if (Route::has('login'))
    <div class="w-full bg-gray-100 dark:bg-gray-800 p-6 text-right z-10 fixed top-0 left-0">
        @auth
        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
        @endif
        @endauth
    </div>
    @endif

    <div class="flex flex-col items-center justify-center min-h-screen pt-4 bg-black bg-opacity-30 ">
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

            

                @foreach($areas as $area)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden min-h-[300px]">
                    <a href="areas/{{ $area->id }}">
                        <img  src="{{ str_replace('public/', '', $area->image) }}" alt="{{$area->nombre}}" class="w-full h-64 object-cover">
                    </a>
                    <div class="p-4 flex justify-center items-center">
                        <a href="area/{{ $area->id }}" class="text-blue-700 inline-block  text-xl font-bold">Entrar al área de {{$area->nombre}}</a>
                    </div>
                </div>
                @endforeach
            </div>
           
        </div>
    </div>


@endsection