<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;


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

Route::get('/', [AuthorController::class, 'index'])->name('index');
Route::get('/anggota', [AuthorController::class, 'anggota'])->name('anggota');
Route::get('/buku', [AuthorController::class, 'buku'])->name('buku');
Route::get('/petugas', [AuthorController::class, 'petugas'])->name('petugas');