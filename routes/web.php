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
    });

require __DIR__.'/auth.php';
