<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'BukuController@index');

Route::resource('anggota', 'AnggotaController');

Route::resource('buku', 'BukuController');

// Route::get('/format_buku', 'BukuController@format');
// Route::post('/import_buku', 'BukuController@import');

// Route::resource('transaksi', 'TransaksiController');
// Route::get('/laporan/trs', 'LaporanController@transaksi');
// Route::get('/laporan/trs/pdf', 'LaporanController@transaksiPdf');
// Route::get('/laporan/trs/excel', 'LaporanController@transaksiExcel');

// Route::get('/laporan/buku', 'LaporanController@buku');
// Route::get('/laporan/buku/pdf', 'LaporanController@bukuPdf');
// Route::get('/laporan/buku/excel', 'LaporanController@bukuExcel');