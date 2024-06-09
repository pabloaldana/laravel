<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Posteo: {{ $post->titulo }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200">
                <h1 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-200">Formulario del Posteo</h1>
                <form method="POST" id="edit-post-form" action="{{ route('posts.update', $post->id) }}">
                    @csrf
                    @method('PUT') <!-- Este método indica que es una actualización -->

                    <div class="mb-4">
                        <label for="titulo" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Título:</label>
                        <input type="text" id="titulo" name="titulo" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" value="{{ $post->titulo }}">
                    </div>

                    <div class="mb-4">
                        <label for="grado" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Grado:</label>
                        <select id="grado" name="grado" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                            <option value="">--Seleccione Grado--</option>
                            @for ($i = 1; $i <= 7; $i++) <option value="{{ $i }}" {{ $post->grado == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="area_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Área:</label>
                        <select id="area-select" name="area_id" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                            <option value="">--Seleccione Área--</option>
                            @foreach($areas as $area)
                            <option value="{{ $area->id }}" {{ $post->area_id == $area->id ? 'selected' : '' }}>{{ $area->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="publicado" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Publicado:</label>
                        <label class="inline-flex items-center cursor-pointer">
                            <input type="checkbox" id="publicado" name="publicado" class="sr-only peer" {{ $post->publicado ? 'checked' : '' }}>
                            <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300"></span>
                        </label>
                    </div>

                    <div class="mb-4">
                        <label for="texto" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Contenido:</label>
                        <textarea id="texto" name="texto" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">{{ $post->texto }}</textarea>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Modificar
                        </button>
                        <button type="button" onclick="resetForm()" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2">
                            Borrar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function resetForm() {
            document.getElementById('edit-post-form').reset();
            // Clear the values of all input elements
            document.getElementById('titulo').value = '';
            document.getElementById('grado').selectedIndex = 0;
            document.getElementById('area-select').selectedIndex = 0;
            document.getElementById('texto').value = '';
        }
    </script>
</x-app-layout>