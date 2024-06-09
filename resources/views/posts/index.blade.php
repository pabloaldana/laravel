<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Mis Posteos') }}
            </h2>
            <a href="{{ route('posts.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Crear Posteo
            </a>
        </div>
    </x-slot>

    <div class="flex flex-col items-center justify-center pt-4">
        <div class="container mx-auto p-4">
            <div class="overflow-x-auto w-full">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm text-center">ID</th>
                            <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm text-center">Título</th>
                            <th class="w-3/12 py-3 px-4 uppercase font-semibold text-sm text-center">Texto</th>
                            <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm text-center">Grado</th>
                            <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm text-center">Creado</th>
                            <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm text-center">Última edición</th>
                            <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm text-center">Habilitado</th>
                            <th class="w-3/12 py-3 px-4 uppercase font-semibold text-sm text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach($posts as $post)
                        <tr class="border-b border-gray-200">
                            <td class="w-1/12 py-3 px-4 text-center">{{ $post->id }}</td>
                            <td class="w-2/12 py-3 px-4 text-center">{{ $post->titulo }}</td>
                            <td class="w-3/12 py-3 px-4 text-center">{{ $post->texto }}</td>
                            <td class="w-1/12 py-3 px-4 text-center">{{ $post->grado }}</td>
                            <td class="w-1/12 py-3 px-4 text-center">{{ $post->created_at }}</td>
                            <td class="w-1/12 py-3 px-4 text-center">{{ $post->updated_at }}</td>
                            <td class="w-1/12 py-3 px-4 text-center">
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="sr-only peer">
                                    <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                    <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300"></span>
                                </label>
                            </td>
                            <td class="w-3/12 py-3 px-4 text-center">
                                <div class="flex justify-center space-x-2">
                                    <a href="{{ route('posts.edit', $post->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="confirmDelete('{{$post->id}}')" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
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

    <script>
        function confirmDelete(id) {
            if (confirm('¿Estás seguro de que deseas eliminar este posteo?')) {
                document.querySelector(`form[action$="/posts/${id}"]`).submit();
            }
        }
    </script>
</x-app-layout>



<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(postId) {
        Swal.fire({
            title: "¿Estás seguro de borrar el post?",
            text: "¡No podrás revertir esto!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sí, bórralo!"
        }).then((result) => {
            if (result.isConfirmed) {
                axios.delete(`/posts/${postId}`)
                    .then(response => {
                        Swal.fire(
                            "¡Borrado!",
                            "Tu post ha sido eliminado.",
                            "success"
                        ).then(() => {
                            location.reload();
                        });
                    })
                    .catch(error => {
                        Swal.fire(
                            "Error",
                            `Hubo un problema al borrar el post con el id ${postId}.`,
                            "error"
                        );
                    });
            }
        });
    }
</script>



<!-- 
<td class="w-1/12 py-3 px-4 text-center">{{ $post->habilitado ? 'Sí' : 'No' }}</td> -->