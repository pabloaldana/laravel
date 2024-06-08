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
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm text-center">Id</th>
                            <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-center">Titulo</th>
                            <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-center">Texto</th>
                            <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm text-center">Grado</th>
                            <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach($posts as $post)
                        <tr>
                            <td class="w-1/6 py-3 px-4 text-center">{{ $post->id }}</td>
                            <td class="w-1/4 py-3 px-4 text-center">{{ $post->titulo }}</td>
                            <td class="w-1/4 py-3 px-4 text-center">{{ $post->texto }}</td>
                            <td class="w-1/6 py-3 px-4 text-center">{{ $post->grado }}</td>
                            <td class="w-1/4 py-3 px-4 text-center flex justify-center space-x-2">
                                <a href="{{ route('posts.edit', $post->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="confirmDelete('{{$post->id}}')" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
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