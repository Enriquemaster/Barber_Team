<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\citascontroller;
/*
Rutas Clientes
*/

Route::get('/', function () {
    return view('Home');
});

Route::get('/productos', function () {
    return view('productos');
});
Route::get('/servicios', function () {
    return view('servicios');
});
Route::get('/conocenos', function () {
    return view('conocenos');
});

Route::get('/validacion', function () {
    return view('validacion');
});
Route::get('/Confirmacion', function () {
    return view('Confirmacion');
});

Route::get('/agendar', [citascontroller::class, 'create'])
    ->name('agendar');

/*
Rutas administrador
*/

Route::resource('citas', citascontroller::class);

Route::get('/administrador', function () {
    return view('administrador');
});

Route::get('/dashboard', [ProfileController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/reservas', [CitasController::class, 'index'])->name('reservas');
    Route::get('/editar_reserva/{cita}', [CitasController::class, 'edit'])->name('editar_reserva');
});



require __DIR__.'/auth.php';
