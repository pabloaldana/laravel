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

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg grid grid-cols-2 gap-10 p-10">
            @foreach ($posts as $post)
            <a href="{{ route('posts.show', $post->id) }}" class="block">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white dark:bg-gray-700">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2 text-gray-800 dark:text-gray-200">{{ $post->titulo }}</div>
                            <p class="text-gray-700 dark:text-gray-300 text-base">
                                {{ $post->texto }}
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span class="inline-block bg-blue-500 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2">Grado: {{ $post->grado }}</span>
                        </div>
                    </div>
                </div>
            </a>
            <div>
                <button type="button" onclick="confirmDelete('{{$post->id}}')" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    Eliminar
                </button>

            </div>
            @endforeach
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