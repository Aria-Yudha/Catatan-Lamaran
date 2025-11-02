<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
})->middleware(['guest'])->name('utama');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/data-portal-lamaran', [PlatformController::class, 'index'])->name('portal-lamaran');
    Route::get('/tambah-data-portal-lamaran', [PlatformController::class, 'create'])->name('tambah-portal-lamaran');
    Route::post('/tambah-data-portal-lamaran/store', [PlatformController::class, 'store'])->name('portal-lamaran.store');
    Route::get('/ubah-data-portal-lamaran/{id}', [PlatformController::class, 'edit'])->name('ubah-portal-lamaran');
    Route::patch('/ubah-data-portal-lamaran/{id}/update', [PlatformController::class, 'update'])->name('portal.update');
    Route::delete('/hapus-data-portal-lamaran/{id}', [PlatformController::class, 'destroy'])->name('portal.destroy');
    Route::get('/data-lamaran', [LamaranController::class, 'index'])->name('data-lamaran');
    Route::get('/tambah-data-lamaran', [LamaranController::class, 'create'])->name('tambah-lamaran');
    Route::post('/tambah-data-lamaran/store', [LamaranController::class, 'store'])->name('data-lamaran.store');
    Route::get('/ubah-data-lamaran/{id}', [LamaranController::class, 'edit'])->name('lamaran.edit');
    Route::patch('/ubah-data-lamaran/{id}/update', [LamaranController::class, 'update'])->name('lamaran.update');
    Route::delete('/hapus-data-lamaran/{id}', [LamaranController::class, 'destroy'])->name('lamaran.destroy');

});

require __DIR__.'/auth.php';
