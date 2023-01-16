<?php

use App\Http\Controllers\BosController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PanenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/get-bos/{id}', [BosController::class, 'getBos']);

Route::get('/karyawan', [KaryawanController::class, 'get']);
Route::post('/karyawan/login', [KaryawanController::class, 'login']);

Route::get('/panen', [PanenController::class, 'get']);
Route::post('/panen', [PanenController::class, 'post']);
Route::delete('/panen/{id}', [PanenController::class, 'delete']);

Route::get('/check', function() {
    return 'All is well';
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
