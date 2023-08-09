<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ResumeController;
use App\Http\Livewire\PembuatanSitus;

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/resume', [ResumeController::class, 'index'])->name('resume');
Route::get('/resume/pdf', [ResumeController::class, 'pdf'])->name('resume_pdf');
Route::get('/jasa-pembuatan-situs-web', PembuatanSitus::class)->name('pembuatan-situs');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');

    Route::get('/proyek', App\Http\Livewire\ProyekTable::class)->name('proyek');
    Route::get('/kontak', App\Http\Livewire\KontakTable::class)->name('kontak');
});

// Route::get('/proyek', [ProyekController::class, 'index'])->name('proyek')->middleware('auth');
// Route::get('/proyek/tambah', [ProyekController::class, 'tambah'])
//     ->name('tambah_proyek')
//     ->middleware('auth');
// Route::get('/proyek/ubah/{proyek}', [ProyekController::class, 'ubah'])
//     ->name('ubah_proyek')
//     ->middleware('auth');
// Route::post('/proyek/hapus', [ProyekController::class, 'hapus'])
//     ->name('hapus_proyek')
//     ->middleware('auth');
