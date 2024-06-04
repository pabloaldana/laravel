@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear Área') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200">
                <h1 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-200">Crear nueva área</h1>
                <form method="POST" action="{{ route('areas.store') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="nombre" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                        <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre De Imagen:</label>
                        <input type="text" id="image" name="image" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>