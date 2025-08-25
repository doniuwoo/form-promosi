<?php

use App\Http\Controllers\PegawaiController;

Route::resource('pegawai', PegawaiController::class);



// routes/web.php
Route::get('/tes-pegawai', function () {
    $pegawai = \App\Models\Pegawai::take(10)->get(); // ambil 10 contoh
    return view('tes-pegawai', compact('pegawai'));
});



Route::get('/tabel-pegawai', [\App\Http\Controllers\PegawaiController::class, 'index']);

http://localhost:8000/tabel-pegawai

use App\Models\Pegawai;

Route::get('/tabel-pegawai', function () {
    $pegawai = Pegawai::all();
    return view('tabel-pegawai', compact('pegawai'));
});


