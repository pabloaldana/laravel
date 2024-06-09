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
                <table class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm text-center">Imagen</th>
                            <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm text-center">ID</th>
                            <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm text-center">Nombre</th>
                            <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm text-center">Creado</th>
                            <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm text-center">Último cambio</th>
                            <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach($areas as $area)
                        <tr class="border-b border-gray-200">
                            <td class="w-1/6 py-3 px-4 text-center">
                                <div class="flex justify-center items-center">
                                    <img src="{{ Storage::url($area->image) }}" alt="{{ $area->descripcion }}" class="w-16 h-16 object-cover">
                                </div>
                            </td>
                            <td class="w-1/6 py-3 px-4 text-center">{{ $area->id }}</td>
                            <td class="w-1/6 py-3 px-4 text-center">{{ $area->nombre }}</td>
                            <td class="w-1/6 py-3 px-4 text-center">{{ $area->created_at }}</td>
                            <td class="w-1/6 py-3 px-4 text-center">{{ $area->updated_at }}</td>
                            <td class="w-1/6 py-3 px-4 text-center">
                                <div class="flex justify-center space-x-2">
                                    <a href="{{ route('areas.edit', $area->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                                    <form action="{{ route('areas.destroy', $area->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="confirmDelete('{{ $area->id }}')" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(areaId) {
            Swal.fire({
                title: "¿Estás seguro de borrar el Área?",
                text: "¡No podrás revertir esto!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, bórralo!"
            }).then((result) => {
                if (result.isConfirmed) {
                    axios.delete(`/areas/${areaId}`)
                        .then(response => {
                            Swal.fire(
                                "¡Borrado!",
                                "El área ha sido eliminada.",
                                "success"
                            ).then(() => {
                                location.reload();
                            });
                        })
                        .catch(error => {
                            Swal.fire(
                                "Error",
                                `Hubo un problema al borrar el área con el id ${areaId}.`,
                                "error"
                            );
                        });
                }
            });
        }
    </script>
</x-app-layout>