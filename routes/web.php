<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{client}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{client}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{client}', [ClienteController::class, 'destroy'])->name('clientes.destroy');