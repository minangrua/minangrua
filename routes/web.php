<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\KonservasiController;
use App\Http\Controllers\Admin\RestareaController;
use App\Http\Controllers\Admin\WisataController;
use App\Http\Controllers\Admin\LokasiController;

Route::get("/", [clientController::class, "home"])->name('home');
Route::get("/wisata", [clientController::class, "wisata"])->name('wisata');
Route::get("/konservasi", [clientController::class, "konservasi"])->name('konservasi');
Route::get("/restarea", [clientController::class, "restarea"])->name('restarea');
Route::get("/lokasi", [clientController::class, "lokasi"])->name('lokasi');

// admin
Auth::routes();
Route::get("/admin/dashboard", [dashboardController::class, "dashboard"])->name('dashboard');
Route::get("/admin/konservasi", [KonservasiController::class, "index"])->name('konservasi.index');
Route::get("/admin/restarea", [RestareaController::class, "index"])->name('restarea.index');
Route::get("/admin/wisata", [WisataController::class, "index"])->name('wisata.index');
Route::get("/admin/lokasi", [LokasiController::class, "index"])->name('lokasi.index');

// Rute untuk fitur tambah, ubah, dan hapus pada konservasi
Route::get('/admin/konservasi/create', [KonservasiController::class, 'create'])->name('konservasi.create');
Route::post('/admin/konservasi/store', [KonservasiController::class, 'store'])->name('konservasi.store');
Route::get('/admin/konservasi/{konservasi}/edit', [KonservasiController::class, 'edit'])->name('konservasi.edit');
Route::post('/admin/konservasi/{konservasi}/update', [KonservasiController::class, 'update'])->name('konservasi.update');
Route::delete('/admin/konservasi/{konservasi}', [KonservasiController::class, 'destroy'])->name('konservasi.destroy');
