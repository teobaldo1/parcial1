<?php

use App\Http\Controllers\OperadorController;
use App\Http\Controllers\UsuarioController;
use App\Models\Operador;
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


Route::controller(UsuarioController::class)->group(function () {
    Route::get('/usuarios', 'index');
    Route::post('/usuarios', 'store');
    Route::put('/usuarios/{id}','update');
    Route::delete('/usuarios/{id}','destroy');
    Route::get('/usuarios/{id}','show');
});


Route::controller(OperadorController::class)->group(function () {
    Route::get('/operador', 'index');
    Route::post('/operador', 'store');
    Route::put('/operador/{id}','update');
    Route::delete('/operador/{id}','destroy');
});