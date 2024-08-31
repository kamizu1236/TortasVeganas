<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TortasController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/mostrarTortas', [TortasController::class, 'listTortas']);
Route::post('/saveTorta', [TortasController::class, 'guardarTorta']);
Route::get('/findTorta/{id}', [TortasController::class, 'buscarTorta']);
Route::put('/updateTorta/{id}', [TortasController::class, 'actualizarTorta']);
Route::delete('/deleteTorta/{id}', [TortasController::class, 'eliminarTorta']); // Nueva ruta
