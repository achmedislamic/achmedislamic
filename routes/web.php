<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\KontakController;

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/resume', [ResumeController::class, 'index'])->name('resume');
Route::get('/resume/pdf', [ResumeController::class, 'pdf'])->name('resume_pdf');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/proyek', [ProyekController::class, 'index'])->name('proyek')->middleware('auth');
Route::get('/proyek/tambah', [ProyekController::class, 'tambah'])
    ->name('tambah_proyek')
    ->middleware('auth');
Route::get('/proyek/ubah/{proyek}', [ProyekController::class, 'ubah'])
    ->name('ubah_proyek')
    ->middleware('auth');
Route::post('/proyek/hapus', [ProyekController::class, 'hapus'])
    ->name('hapus_proyek')
    ->middleware('auth');

Route::get('/kontak', [KontakController::class, 'index'])->name('kontak')->middleware('auth');
