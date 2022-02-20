<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'DashboardController@index');
Route::get('anggota', 'AnggotaController@index');
Route::get('anggota.tambah', 'AnggotaController@tambah');
Route::get('anggota.cari', 'BukuController@cari');
Route::get('anggota.edit', 'BukuController@edit');

Route::get('buku', 'BukuController@index');
Route::get('buku.tambah', 'BukuController@tambah');
Route::get('buku.cari', 'BukuController@cari');
Route::get('buku.edit', 'BukuController@edit');

// Route::get('/petugas', 'PetugasController@index');
// Route::get('/peminjaman', 'PeminjamanController@index');
// Route::get('/pengembalian', 'PengembalianController@index');
Route::get('/', 'DashboardController@index');
Route::get('/', 'DashboardController@index');
Route::get('/', 'DashboardController@index');