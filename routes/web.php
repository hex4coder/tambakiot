<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PanenController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
    // echo public_path();
    // echo "\r\n";
    // echo '<br>';
    // echo Storage::url('/var/www/html/storage/app/public/foto/ZUgEt1Xct4l6cn5B4ypxlcnm9da0ILxcjGD59zZr.jpg');
    // echo '<br>';
    // echo public_path('foto') . '/CJKeKAEzwf4wi4T9ChGuAW6nwFFG6dJTaISmoYTD.png';
    return view('welcome');
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
