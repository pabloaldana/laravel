
<x-app-layout>

    <div class="background-image min-h-screen flex items-center justify-center mx-auto sm:px-6 lg:px-8 py-12">
        <div class="w-full min-h-screen flex-grow-0 bg-black bg-opacity-30">
            <div class="bg-white items-center max-w-7xl  mx-auto rounded-lg shadow-lg p-6">
                <h1 class="text-3xl font-bold mb-4 text-center">{{ $post->titulo }}</h1>
                <div class="text-blue-700 text-xl font-bold mb-4 text-left">Texto para {{$post->grado}} grado</div>
                <div class="text-black-200 text-2xl mb-4 text-align">{!! $post->texto !!}</div>
                
            </div>
            @include('components.boton-volver')
        </div>
    </div>
</x-app-layout>