<?php

use App\Http\Controllers\Admin\LogController;
use App\Http\Controllers\Admin\SiswaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; //

use App\Http\Controllers\HomeController; //

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
    return redirect()->route('login');
});

Route::get('/home', function () {
    return view('home');
});

// ========================================================================================================= //

Auth::routes(['register' => 1]);

// Normal Users Routes List
Route::middleware(['auth', 'user-access:client'])->group(function () {
    Route::get('/client/dashboard', [HomeController::class, 'clientDashboard'])->name('client.dashboard');
});


// ========================================================================================================= //
// Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/dashboard', [HomeController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::controller(SiswaController::class)->group(function () {
        Route::get('/admin/siswa', 'index')->name('admin.siswa.index');
        Route::post('/admin/siswa', 'simpan')->name('admin.siswa.simpan');

        Route::get('/admin/siswa/{id}/status_aktif', 'status_aktif')->name('admin.siswa.status_aktif');
        Route::post('/admin/siswa/{id}/status_aktif', 'status_aktif')->name('admin.siswa.status_aktif');

        Route::get('/admin/siswa/{id}/status_tidak_aktif', 'status_tidak_aktif')->name('admin.siswa.status_tidak_aktif');
        Route::post('/admin/siswa/{id}/status_tidak_aktif', 'status_tidak_aktif')->name('admin.siswa.status_tidak_aktif');

        Route::get('/admin/siswa/{id}/hapus', 'hapus')->name('admin.siswa.hapus');
        Route::post('/admin/siswa/{id}/hapus', 'hapus')->name('admin.siswa.hapus');

        Route::get('/admin/siswa/{id}/ubah', 'ubah')->name('admin.siswa.ubah');
        Route::post('/admin/siswa/{id}/perbarui', 'perbarui')->name('admin.siswa.perbarui');
    });

    Route::controller(LogController::class)->group(function () {
        Route::get('/admin/log', 'index')->name('admin.log.index');

        Route::get('/admin/log/{id}/hapus', 'hapus')->name('admin.log.hapus');
        Route::post('/admin/log/{id}/hapus', 'hapus')->name('admin.log.hapus');
    });
});
