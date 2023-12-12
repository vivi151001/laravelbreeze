<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'fnIndex']) -> name('xIndex');

Route::post('/', [PagesController::class, 'fnRegistrar'])->name('Estudiante.xRegistrar');

Route::get('/detalle{id}', [PagesController::class, 'fnEstDetalle'])->name('Estudiante.xDetalle');

Route::get('/galeria/{numero?}', [PagesController::class, 'fnGaleria']) -> where('numero', '[0-9]+') -> name('xGaleria');

Route::get('/lista', [PagesController::class, 'fnLista']) -> name('xLista');

Route::get('/actualizar/{id}', [PagesController::class, 'fnEstActualizar']) -> name('Estudiante.xActualizar');
Route::put('/actualizar/{id}', [PagesController::class, 'fnUpdate']) -> name('Estudiante.xUpdate');

Route::delete('/eliminar/{id}', [PagesController::class, 'fnEliminar']) -> name('Estudiante.xEliminar');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';


/*
Route::get('/', function () {
    return view('welcome');
})-> name('xInicio');

Route::get('/saludo', function () {
    return "Hola mundo desde laravel...";
});

Route::view('/galeria', 'pagGaleria', ['valor' => 15]) -> name ('xGaleria');

Route::get('/lista', function () {
    return view('pagLista');
}) -> name('xLista');

Route::get('/galeria/{numero}', function ($numero) {
    return "Este es el codigo de la foto: ".$numero;
}) -> where('numero','[0-9]+');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

*/