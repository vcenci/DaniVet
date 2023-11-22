<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClassificacoesController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\EspecieController;
use App\Http\Controllers\LoteController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProprietarioController;
use App\Http\Controllers\RacaController;
use Database\Seeders\RacaSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/consultas', [ConsultaController::class, 'index']);
Route::get('/consultas/{id}', [ConsultaController::class, 'show']);
Route::post('/consultas', [ConsultaController::class, 'store']);
Route::delete('/consultas/{id}', [ConsultaController::class, 'destroy']);
Route::put('/consultas/{id}', [ConsultaController::class, 'update']);
Route::get('/consultas/{id}/edit', [ConsultaController::class, 'edit']);

Route::get('/pacientes', [PacienteController::class, 'index']);
Route::get('/pacientes/{id}', [PacienteController::class, 'show']);
Route::post('/pacientes', [PacienteController::class, 'store']);
Route::delete('/pacientes/{id}', [PacienteController::class, 'destroy']);
Route::put('/pacientes/{id}', [PacienteController::class, 'update']);
Route::get('/pacientes/{id}/edit', [PacienteController::class, 'edit']);

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias/{id}', [CategoriaController::class, 'show']);
Route::post('/categorias', [CategoriaController::class, 'store']);
Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy']);
Route::put('/categorias/{id}', [CategoriaController::class, 'update']);
Route::get('/categorias/{id}/edit', [CategoriaController::class, 'edit']);

Route::get('/proprietario', [ProprietarioController::class, 'index']);
Route::get('/proprietario/{id}', [ProprietarioController::class, 'show']);
Route::post('/proprietario', [ProprietarioController::class, 'store']);
Route::delete('/proprietario/{id}', [ProprietarioController::class, 'destroy']);
Route::put('/proprietario/{id}', [ProprietarioController::class, 'update']);
Route::get('/proprietario/{id}/edit', [ProprietarioController::class, 'edit']);

Route::get('/medicamentos', [MedicamentoController::class, 'index']);
Route::get('/medicamentos/{id}', [MedicamentoController::class, 'show']);
Route::post('/medicamentos', [MedicamentoController::class, 'store']);
Route::delete('/medicamentos/{id}', [MedicamentoController::class, 'destroy']);
Route::put('/medicamentos/{id}', [MedicamentoController::class, 'update']);
Route::get('/medicamentos/{id}/edit', [MedicamentoController::class, 'edit']);

Route::get('/classificacoes', [ClassificacoesController::class, 'index']);
Route::get('/classificacoes/{id}', [ClassificacoesController::class, 'show']);
Route::post('/classificacoes', [ClassificacoesController::class, 'store']);
Route::delete('/classificacoes/{id}', [ClassificacoesController::class, 'destroy']);
Route::put('/classificacoes/{id}', [ClassificacoesController::class, 'update']);
Route::get('/classificacoes/{id}/edit', [ClassificacoesController::class, 'edit']);

Route::get('/especies', [EspecieController::class, 'index']);
Route::get('/especies/{id}', [EspecieController::class, 'show']);
Route::post('/especies', [EspecieController::class, 'store']);
Route::delete('/especies/{id}', [EspecieController::class, 'destroy']);
Route::put('/especies/{id}', [EspecieController::class, 'update']);
Route::get('/especies/{id}/edit', [EspecieController::class, 'edit']);

Route::get('/racas', [RacaController::class, 'index']);
Route::get('/racas/{id}', [RacaController::class, 'show']);
Route::post('/racas', [RacaController::class, 'store']);
Route::delete('/racas/{id}', [RacaController::class, 'destroy']);
Route::put('/racas/{id}', [RacaController::class, 'update']);
Route::get('/racas/{id}/edit', [RacaController::class, 'edit']);

Route::get('/lotes', [LoteController::class, 'index']);
Route::get('/lotes/{id}', [LoteController::class, 'show']);
Route::post('/lotes', [LoteController::class, 'store']);
Route::delete('/lotes/{id}', [LoteController::class, 'destroy']);
Route::put('/lotes/{id}', [LoteController::class, 'update']);
Route::get('/lotes/{id}/edit', [LoteController::class, 'edit']);