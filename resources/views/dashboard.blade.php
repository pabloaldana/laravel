<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tablo de Areas') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-3 gap-10 p-10">
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
    </div>

    <button href="{{ route('areas.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Crear Area
    </button>
</x-app-layout>