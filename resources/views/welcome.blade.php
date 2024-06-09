<x-app-layout>
   
    
    <div class="background-image min-h-screen bg-gray-200 flex items-center justify-center">
        <div class="flex flex-col items-center justify-center min-h-screen pt-4">
            <div class="container mx-auto p-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($areas as $area)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden min-h-[300px]">
                        <a href="{{ route('areas.show', $area->id) }}">
                            <img src="{{ Storage::url($area->image) }}" alt="{{ $area->nombre }}" class="w-full h-64 object-cover">
                        </a>
                        <div class="p-4 flex justify-center items-center">
                            <a href="{{ route('areas.show', $area->id) }}" class="text-blue-700 inline-block text-xl font-bold">Entrar al área de {{ $area->nombre }}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>