<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Tablo de Areas') }}
            </h2>
            <a href="{{ route('areas.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Crear Area
            </a>
        </div>
    </x-slot>


    <div class="flex flex-col items-center justify-center pt-4">
        <div class="container mx-auto p-4">
            <div class="overflow-x-auto w-full">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-center">Imagen</th>
                            <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm">ID</th>
                            <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm">Nombre</th>
                            <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach($areas as $area)
                        <tr>
                            <td class="w-1/4 py-3 px-4 text-center">
                                <div class="flex justify-center items-center">
                                    <img src="{{ Storage::url($area->image) }}" alt="{{ $area->descripcion }}" class="w-16 h-16 object-cover ">
                                </div>
                            </td>
                            <td class="w-1/4 py-3 px-4 text-center">{{ $area->id }}</td>
                            <td class="w-1/4 py-3 px-4 text-center">{{ $area->nombre }}</td>
                            <td class="w-1/4 py-3 px-4 text-center">
                                <a href="{{ route('areas.edit', $area->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Editar</a>
                                <form action="{{ route('areas.destroy', $area->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</x-app-layout>