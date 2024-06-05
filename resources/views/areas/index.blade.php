<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tablo de Areas') }}
        </h2>

    </x-slot>

    <div class="grid grid-cols-3 gap-10 p-10">
        @foreach ($areas as $area)
        <div class="max-w-sm rounded overflow-hidden shadow-lg text-center border-2 border-white">
            <a href='/{{$area->nombre}}'>
                <img src="{{ asset('images/areas/' . $area->image) }}" alt="Naturales" class="w-full h-auto bg-cover rounded-lg">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-white"> {{$area->nombre}}</div>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Nros de post:</span>
                </div>
            </a>
        </div>
        @endforeach
    </div>

    <a href="{{ route('areas.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Crear Area
    </a>
</x-app-layout>


<!-- <div class="grid grid-cols-3 gap-10 p-10">
    <a href="/naturales" class="relative h-64 w-full motion-safe:hover:scale-[1.01] transition-all ">
        <img src="{{ asset('images/areas/naturales.png') }}" alt="Naturales" class=" w-full h-full bg-cover rounded-lg">
    </a>
    <a href="/matematica" class="relative h-64 w-full   motion-safe:hover:scale-[1.01] transition-all ">
        <img src="{{ asset('images/areas/matematica.jpeg') }}" alt="Matemática" class=" w-full h-full bg-cover rounded-lg">
    </a>
    <a href="/lengua" class="relative h-64 w-full   motion-safe:hover:scale-[1.01] transition-all ">
        <img src="{{ asset('images/areas/lengua.png') }}" alt="Lengua" class=" w-full h-full bg-cover rounded-lg">
    </a>
    <a href="/literatura" class="relative h-64 w-full   motion-safe:hover:scale-[1.01] transition-all ">
        <img src="{{ asset('images/areas/literatura.png') }}" alt="Literatura" class=" w-full h-full bg-cover rounded-lg">
    </a>
    <a href="/historia" class="relative h-64 w-full   motion-safe:hover:scale-[1.01] transition-all ">
        <img src="{{ asset('images/areas/historia.png') }}" alt="Historia" class=" w-full h-full bg-cover rounded-lg">
    </a>
</div> -->