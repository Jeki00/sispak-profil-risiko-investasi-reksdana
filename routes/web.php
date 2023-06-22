<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/aturan', [App\Http\Controllers\AturanController::class, 'index'])->name('aturan');
Route::get('/aturan/tambah', [App\Http\Controllers\AturanController::class, 'create'])->name('aturan');
Route::post('/aturan/tambah', [App\Http\Controllers\AturanController::class, 'store'])->name('aturan');
Route::delete('/aturan/hapus/{id}', [App\Http\Controllers\AturanController::class, 'destroy'])->name('aturan');


Route::get('/konsultasi', [App\Http\Controllers\PertanyaanController::class, 'index'])->name('konsultasi');
Route::post('/konsultasi', [App\Http\Controllers\PertanyaanController::class, 'consult'])->name('konsultasi');

Route::post('/session', [App\Http\Controllers\SessionController::class, 'store'])->name('session');

