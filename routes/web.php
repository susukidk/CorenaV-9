<?php

use App\Http\Controllers\AltasBajas;
use App\Http\Controllers\Archivos;
use App\Http\Controllers\CompostasController;
use App\Http\Controllers\MecanizacionController;
use App\Http\Controllers\ArbolesFrutalesController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login'])->name('auth-login');
Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
Route::post('/agregarNuevo', [AuthController::class, 'agregarNuevo']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/registrarUsuario', [AuthController::class, 'registrarUsuario'])->name('registrarUsuario');

Route::middleware(['auth'])->group(function () {
    Route::get('/inicio', [AltasBajas::class, 'index'])->name('inicio');

    Route::get('/crud', [AltasBajas::class, 'index']);
    Route::get('/crud/create', [AltasBajas::class, 'create']);
    Route::post('/crud/store', [AltasBajas::class, 'store']);
    Route::get('/crud/edit/{id}', [AltasBajas::class, 'edit'])->name('edit');
    Route::put('/crud/update/{id}', [AltasBajas::class, 'update'])->name('update');
    Route::get('/crud/show/{id}', [AltasBajas::class, 'show'])->name('show');
    Route::delete('/crud/destroy/{id}', [AltasBajas::class, 'destroy'])->name('destroy');

    Route::get('/crud/datos_A/{id}', [AltasBajas::class, 'datos_A'])->name('datos_A');

    // Rutas de Comopstas
    Route::get('/compostas', [CompostasController::class, 'index'])->name('compostas.index');
    Route::get('/compostas/create/{id}', [CompostasController::class, 'create'])->name('compostas.create');
    Route::post('/compostas/store', [CompostasController::class, 'store'])->name('compostas.store');
    Route::get('/compostas/edit/{folioCompostas}', [CompostasController::class, 'edit'])->name('compostas.edit');
    Route::put('/compostas/update/{folioCompostas}', [CompostasController::class, 'update'])->name('compostas.update');
    Route::delete('/compostas/destroy/{folioCompostas}', [CompostasController::class, 'destroy'])->name('compostas.destroy');

    // Rutas de Mecanizacion
    Route::get('/mecanizacion', [MecanizacionController::class, 'index'])->name('mecanizacion.index');
    Route::get('/mecanizacion/create/{id}', [MecanizacionController::class, 'create'])->name('mecanizacion.create');
    Route::post('/mecanizacion/store', [MecanizacionController::class, 'store'])->name('mecanizacion.store');
    Route::get('/mecanizacion/edit/{folioMecanizacion}', [MecanizacionController::class, 'edit'])->name('mecanizacion.edit');
    Route::put('/mecanizacion/update/{folioMecanizacion}', [MecanizacionController::class, 'update'])->name('mecanizacion.update');
    Route::delete('/mecanizacion/destroy/{folioMecanizacion}', [MecanizacionController::class, 'destroy'])->name('mecanizacion.destroy');

    // Rutas de Arboles Frutales
    Route::get('/arbolesfrutales', [ArbolesFrutalesController::class, 'index'])->name('arbolesfrutales.index');
    Route::get('/arbolesfrutales/create/{id}', [ArbolesFrutalesController::class, 'create'])->name('arbolesfrutales.create');
    Route::post('/arbolesfrutales/store', [ArbolesFrutalesController::class, 'store'])->name('arbolesfrutales.store');
    Route::get('/arbolesfrutales/edit/{folioarbolesfrutales}', [ArbolesFrutalesController::class, 'edit'])->name('arbolesfrutales.edit');
    Route::put('/arbolesfrutales/update/{folioarbolesfrutales}', [ArbolesFrutalesController::class, 'update'])->name('arbolesfrutales.update');
    Route::delete('/arbolesfrutales/destroy/{folioarbolesfrutales}', [ArbolesFrutalesController::class, 'destroy'])->name('arbolesfrutales.destroy');

});
