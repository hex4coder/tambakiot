<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PanenController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    echo storage_path('app/public') ;
    
    //return view('welcome');
});

Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan');
Route::get('/panen', [PanenController::class, 'index'])->name('panen');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get(
        '/dashboard',
        function () {
            return view('dashboard');
        }
    )->name('dashboard');
});
