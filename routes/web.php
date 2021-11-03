<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuratController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pdf', function() {
    $item = 'Rolin Sanjaya Tamba';

    return view('pages.pdf.surat', [
        'item' => $item
    ]);
});

Route::get('/cetak-pdf', [DashboardController::class, 'surat']);

Route::middleware('auth')
    ->group(function() {
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

        Route::get('/surat', [SuratController::class, 'index'])->name('surat.index');

        Route::get('/surat/form-ajukan-surat', [SuratController::class, 'create'])->name('surat.create');

        Route::get('/surat/form-ajukan-surat/ajukan-surat', [SuratController::class, 'store'])->name('surat.store');

        Route::get('/cetak-surat', [SuratController::class, 'cetak_surat'])->name('surat.cetak');
    });

Route::middleware('laboran')
    ->prefix('laboran')
    ->group(function() {
        Route::get('/surat', [SuratController::class, 'index_laboran'])->name('laboran.surat.index');

        Route::put('/surat/proses-surat-{id}', [SuratController::class, 'teruskan_surat'])->name('laboran.surat.teruskan');
    });

Route::middleware('ka_lab')
    ->prefix('kepala-lab')
    ->group(function() {
        Route::get('/surat', [SuratController::class, 'index_ka_lab'])->name('ka_lab.surat.index');

        Route::put('/surat/terima-surat-{id}', [SuratController::class, 'terima_surat'])->name('ka_lab.surat.terima');
    });

require __DIR__.'/auth.php';
