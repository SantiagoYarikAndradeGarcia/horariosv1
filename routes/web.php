<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PuestosController;
use App\Http\Controllers\PlazasController;
use App\Http\Controllers\ProfileController;

// Alumnos
    Route::get('/Alumnos2.index', [AlumnoController::class, 'index'])->name('alumnos.index');    // INDEX
    
    Route::get('/Alumnos2.create', [AlumnoController::class, 'create'])->name('alumnos.create'); // CREATE
    Route::post('/Alumnos2.store', [AlumnoController::class, 'store'])->name('alumnos.store');       
    
    Route::get('/Alumnos2.edit/{alumno}', [AlumnoController::class, 'edit'])->name('alumnos.edit');       // EDIT
    Route::get('/Alumnos2.show/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show');       // VER
    
    Route::post('/Alumnos2.destroy/{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');// DESRTOY
    Route::post('/Alumnos2.update/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');//UPDATE   
    
    
    // PUESTOS
    Route::get('/Puestos.index', [PuestosController::class, 'index'])->name('Puestos.index');    // INDEX
    Route::get('/Puestos.create', [PuestosController::class, 'create'])->name('Puestos.create'); // CREATE
    Route::post('/Puestos.store', [PuestosController::class, 'store'])->name('Puestos.store');   
    
    Route::get('/Puestos.edit/{puesto}', [PuestosController::class, 'edit'])->name('Puestos.edit');       // EDIT
    Route::post('/Puestos.destroy/{puesto}', [PuestosController::class, 'destroy'])->name('Puestos.destroy');// DESRTOY/DELETE
    Route::get('/Puestos.show/{puesto}', [PuestosController::class, 'show'])->name('Puestos.show');       // SHOW/VER
    Route::post('/Puestos.update/{puesto}', [PuestosController::class, 'update'])->name('Puestos.update');//UPDATE   


Route::get('/', function () {
    return view('inicio');
});

Route::get('/dashboard', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
