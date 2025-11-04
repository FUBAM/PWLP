<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KaryawanController;

// Route::get('/satu', function () {
//     echo "satu dua tiga"; 
// });

// Route::get('/edit/{nama}', function ($nama) {
//     echo "Nilai Parameter Adalah ".$nama;
// })->where('nama', '[A-Z]+'); 

// Route::get('/index', function () {
//     echo "<a href='".route('create')."'>Akses Route dengan nama</a>";
// });

// route::get('/create', function () {
//     echo "Rote diakses menggunakan nama";
// })->name('create');

// Route::get('/produk', [App\Http\Controllers\ProdukController::class, 'index']);

// Route::get('/pegawai', [App\Http\Controllers\KaryawanController::class, 'index']);

// Route::resource('/karyawan', KaryawanController::class);

Route::resource('produk', ProdukController::class);