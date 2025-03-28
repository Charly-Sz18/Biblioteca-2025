@extends('layouts.app')

@section('content')
<div class="p-6  min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="mt-6 mb-6">
        <a href="{{ route('menu') }}" class="bg-red-50 text-red-500 px-4 py-2 rounded-lg hover:bg-red-100 transition">
            Volver al Menú
        </a>
    </div>
    
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-semibold text-gray-900 dark:text-white">Biblioteca - Listado de Libros</h1>
        <button class="scale-100 p-2 bg-red-50  rounded-full flex items-center justify-center hover:scale-105 transition editBtn" data-id="" data-nombre="" data-editor="" data-imagen="">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Agregar Libro
        </button>
    </div>

    <div class="grid md:grid-cols-3 gap-4">
        {{-- @foreach($libros as $libro) --}}
        <div class="bg-white dark:bg-gray-800/50 rounded-lg shadow-md p-4">
            <img src="" alt="Imagen del libro" class="w-full h-40 object-cover rounded-md">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mt-2">Pulgarcito</h3>
            <p class="text-gray-600">Charles</p>
            <div class="mt-4 flex justify-end">
                <button class="bg-blue-500 text-white px-3 py-1 mx-2 rounded hover:bg-blue-600 editBtn" data-id="" data-nombre="" data-editor="" data-imagen="">Editar</button>
                <form action="" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Eliminar</button>
                </form>
            </div>
        </div>
        <div class="bg-white dark:bg-gray-800/50 rounded-lg shadow-md p-4">
            <img src="" alt="Imagen del libro" class="w-full h-40 object-cover rounded-md">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mt-2">Pulgarcito</h3>
            <p class="text-gray-600">Charles</p>
            <div class="mt-4 flex justify-end">
                <button class="bg-blue-500 text-white px-3 py-1 mx-2 rounded hover:bg-blue-600 editBtn" data-id="" data-nombre="" data-editor="" data-imagen="">Editar</button>
                <form action="" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Eliminar</button>
                </form>
            </div>
        </div>
        <div class="bg-white dark:bg-gray-800/50 rounded-lg shadow-md p-4">
            <img src="" alt="Imagen del libro" class="w-full h-40 object-cover rounded-md">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mt-2">Pulgarcito</h3>
            <p class="text-gray-600">Charles</p>
            <div class="mt-4 flex justify-end">
                <button class="bg-blue-500 text-white px-3 py-1 mx-2 rounded hover:bg-blue-600 editBtn" data-id="" data-nombre="" data-editor="" data-imagen="">Editar</button>
                <form action="" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Eliminar</button>
                </form>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>

    
</div>

<!-- Modal de Edición -->
<div id="editModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 w-1/3">
        <h2 class="text-xl font-semibold mb-4 dark:text-white">Editar Libro</h2>
        <form id="editForm" action="" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" id="editId">

            <label class="block mb-2 dark:text-white">Imagen URL</label>
            <input type="file" id="editImagen" class="w-full p-2 mb-4 rounded-lg border border-gray-300 dark:bg-gray-700 dark:text-white">

            <label for="nombre" class="block text-sm font-semibold mb-2 dark:text-white">Nombre</label>
            <input type="text" id="editNombre" name="editNombre" class="w-full p-2 mb-4 rounded-lg border border-gray-300 dark:bg-gray-700 dark:text-white" placeholder="Ingresa el nombre o código" required>
           
            <label for="nombre" class="block text-sm font-semibold mb-2 dark:text-white">Editor</label>
            <input type="text" id="editEditor" name="editEditor" class="w-full p-2 mb-4 rounded-lg border border-gray-300 dark:bg-gray-700 dark:text-white" placeholder="Ingresa el nombre o código" required>
            

            <div class="flex justify-end space-x-2">
                <button type="button" class="bg-gray-400 text-white px-4 py-2 rounded" id="closeModal">Cancelar</button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
            </div>
        </form>
    </div>
</div>

<script>
    document.querySelectorAll('.editBtn').forEach(button => {
        button.addEventListener('click', (e) => {
            const id = e.target.dataset.id;
            const nombre = e.target.dataset.nombre;
            const editor = e.target.dataset.editor;
            const imagen = e.target.dataset.imagen;

            document.getElementById('editId').value = id;
            document.getElementById('editNombre').value = nombre;
            document.getElementById('editEditor').value = editor;
            document.getElementById('editImagen').value = imagen;

            document.getElementById('editModal').classList.remove('hidden');
            document.getElementById('editForm').action = `/libros/${id}`;
        });
    });

    document.getElementById('closeModal').addEventListener('click', () => {
        document.getElementById('editModal').classList.add('hidden');
    });
</script>

@endsection