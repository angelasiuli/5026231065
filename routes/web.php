<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;

use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\TasController;



//import java.io

// System.out.println("hello") kalo di php pake ::
Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('/home', function () {
	return view('home');
});

Route::get('/tugas1', function () {
    return view('tugas1');
});

Route::get('/tugas2linktree', function () {
    return view('tugas2linktree');
});

Route::get('/tugas3', function () {
    return view('tugas3');
});

Route::get('/tugas4', function () {
    return view('tugas4');
});

Route::get('/tugas5asinkron', function () {
    return view('tugas5asinkron');
});

Route::get('/uts', function () {
    return view('uts');
});

Route::get('dosen', [DosenController::class,'index']);
Route::get('dosen/welcome', [DosenController::class,'welcome']);

// Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);



Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);



Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);


Route::get('/tas', [TasController::class, 'index']);
Route::get('/tas/tambah', [TasController::class, 'tambah']);
Route::post('/tas/store', [TasController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/tas/edit/{id}',[TasController::class, 'edit']);
Route::post('/tas/update',[TasController::class, 'update']);
Route::get('/tas/hapus/{id}', [TasController::class, 'hapus']);
Route::get('/tas/cari', [TasController::class, 'cari']);
