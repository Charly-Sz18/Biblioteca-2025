@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="mt-6 mb-6">
        <a href="{{ route('menu') }}" class="bg-red-50 text-red-500 px-4 py-2 rounded-lg hover:bg-red-100 transition">
            Volver al Menú
        </a>
    </div>

    <h1 class="text-3xl font-semibold text-gray-900 dark:text-white mb-6">Registrar Préstamo</h1>

    <div class="grid gap-4">
        <div class="bg-white dark:bg-gray-800/50 rounded-lg shadow-md p-4">
            <h2 class="text-xl font-semibold mb-4 dark:text-white">Libros Disponibles</h2>
            {{-- @foreach($librosDisponibles as $libro) --}}
            <div class="flex justify-between items-center p-2 hover:bg-gray-500 rounded dark:text-white">
                <span >Pulgarcito</span>
                <button class="bg-red-50 text-red-500 px-2 py-1 rounded" id="prestarBtn">
                    Prestar
                </button>
            </div>
            {{-- @endforeach --}}
        </div>
    </div>
    
    <!-- Modal -->
    <div id="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 w-1/3">
            <h2 class="text-xl font-semibold mb-4 dark:text-white">Registrar Préstamo</h2>
            <form action="" method="POST">
                @csrf
                <label for="nombre" class="block text-sm font-semibold mb-2 dark:text-white">Nombre o Código del Usuario</label>
                <input type="text" id="nombre" name="nombre" class="w-full p-2 mb-4 rounded-lg border border-gray-300 dark:bg-gray-700 dark:text-white" placeholder="Ingresa el nombre o código" required>
                
                <div class="flex justify-between">
                    <button type="button" onclick="closeModal()" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Cancelar</button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Registrar</button>
                </div>
            </form>
        </div>
    </div>


</div>

<script>
    // Función para mostrar el modal
    const prestarBtn = document.getElementById('prestarBtn');
    const modal = document.getElementById('modal');

    prestarBtn.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    // Función para cerrar el modal
    function closeModal() {
        modal.classList.add('hidden');
    }
</script>
@endsection
