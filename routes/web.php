<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KgbController;
use App\Http\Controllers\KgbKategoriController;
use App\Http\Controllers\KpnController;
use App\Http\Controllers\KpnKategoriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\SuratKategoriController;
use App\Http\Livewire\AgendaCount;
use App\Http\Livewire\DashboardCount;
use App\Http\Livewire\FormKategori;
use App\Http\Livewire\KgbCount;
use App\Http\Livewire\KpnCount;
use App\Http\Livewire\SuratCount;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [DashboardCount::class, 'render'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/dashboardcount', [DashboardCount::class, 'render'])->name('dashboard.count');
    Route::get('/agendacount', [AgendaCount::class, 'render'])->name('agenda.count');
    Route::get('/suratcount', [SuratCount::class, 'render'])->name('surat.count');
    Route::get('/kpncount', [KpnCount::class, 'render'])->name('kpn.count');
    Route::get('/kgbcount', [KgbCount::class, 'render'])->name('kgb.count');
    Route::get('/formkategori', [FormKategori::class, 'render'])->name('form.kategori');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/suratkategori', SuratKategoriController::class);
    Route::resource('/kpnkategori', KpnKategoriController::class);
    Route::resource('/kgbkategori', KgbKategoriController::class);
    Route::resource('/surat', SuratController::class);
    Route::resource('/kpn', KpnController::class);
    Route::resource('/kgb', KgbController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
