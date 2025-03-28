<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [MainController::class, 'index'])->name('menu');
// Route::get('/biblioteca', [BibliotecaController::class, 'index'])->name('biblioteca');
// Route::get('/prestamos', [PrestamoController::class, 'index'])->name('prestamos');
// Route::get('/devolucion', [DevolucionController::class, 'index'])->name('devolucion');
// Route::get('/reservas', [ReservaController::class, 'index'])->name('reservas');

Route::get('/', function () {
    return view('menu'); // Carga la vista 'menu.blade.php'
})->name('menu');

Route::get('/biblioteca', function () {
    return view('biblioteca'); // Carga la vista 'biblioteca.blade.php'
})->name('biblioteca');

Route::get('/prestamos', function () {
    return view('prestamos'); // Carga la vista 'prestamos.blade.php'
})->name('prestamos');

Route::get('/devolucion', function () {
    return view('devolucion'); // Carga la vista 'devolucion.blade.php'
})->name('devolucion');

Route::get('/reservas', function () {
    return view('reservas'); // Carga la vista 'reservas.blade.php'
})->name('reservas');