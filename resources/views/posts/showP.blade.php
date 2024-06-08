@extends('layouts.app')
@section('content')
<div class="flex flex-col items-center justify-center min-h-screen pt-4 bg-black bg-opacity-30">
    <div class="container mx-auto mt-5 w-max">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-3xl font-bold mb-4 text-center">{{ $post->titulo }}</h1>
            <div class="text-blue-700 text-xl font-bold mb-4 text-left">Texto para {{$post->grado}} grado</div>
            <div class="text-black-200 text-2xl mb-4 text-align">{!! $post->texto !!}</div>
            
        </div>
        @include('components.boton-volver')  
    </div>
   
</div>
@endsection