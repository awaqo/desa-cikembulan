<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AdminController;

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

// User Route
Route::controller(MainController::class)->group(function() {
    Route::get('/', 'index')->name('beranda');
    Route::get('/informasi', 'informasi')->name('informasi');
    Route::get('/layanan', 'layanan')->name('layanan');
    Route::get('/profil/visi-misi', 'visi_misi')->name('visi-misi');
    Route::get('/profil/gambaran-umum', 'gambaran_umum')->name('gambaran-umum');
    Route::get('pengaduan', 'form_pengaduan')->name('pengaduan');

    Route::controller(PengaduanController::class)->group(function() {
        // validasi
        Route::post('proses_pengaduan', 'proses_pengaduan')->name('pengaduan.proses_pengaduan');
    });
});

// Admin Route
Route::prefix('admin')->group(function() {
    Route::middleware(['guest'])->group(function () {
        Route::controller(AuthController::class)->group(function() {
            Route::get('/', 'index');
            Route::get('login', 'login')->name('login');
            Route::get('registrasi', 'registration')->name('registrasi');
            
            // validasi
            Route::post('validate_registration', 'validate_registration')->name('auth.validate_registration');
            Route::post('validate_login', 'validate_login')->name('auth.validate_login');
        });
    });

    Route::middleware(['auth'])->group(function() {
        // Dashboard
        Route::controller(DashboardController::class)->group(function(){
            Route::get('/', 'index');
            Route::get('dashboard', 'dashboard')->name('dashboard');
        });

        // Pengaduan
        Route::prefix('pengaduan')->group(function() {
            Route::controller(PengaduanController::class)->group(function() {
                Route::get('/', 'show_data')->name('admin_pengaduan');
                Route::get('{id}', 'show_by_id')->name('pengaduan_by_id');
                Route::get('hapus/{id}', 'hapus')->name('hapus_by_id');

                // Export PDF
                Route::get('preview/{id}', 'previewPDF');
                Route::get('unduh/{id}', 'exportPDF');
            });
        });

        // Berita
        Route::prefix('berita')->group(function() {
            Route::controller(BeritaController::class)->group(function() {
                Route::get('/', 'index')->name('indexBerita');
            });
        });

        // Akun Admin
        Route::prefix('akun')->group(function() {
            Route::controller(AdminController::class)->group(function() {
                Route::get('/', 'index')->name('admin_akun');
                Route::get('add-admin', 'add_admin')->name('tambah_admin');
                Route::get('edit/{id}', 'admin_by_id')->name('admin_by_id');
                Route::post('edit/update/{id}', 'update_admin');
                Route::get('hapus-akun/{id}', 'hapus_akun')->name('hapus_akun');

                Route::get('edit/password/{id}', 'password')->name('password');
                Route::post('edit/password/ubah/{id}', 'ubah_password');
    
                Route::controller(AuthController::class)->group(function(){
                    Route::post('validate_registration', 'validate_registration')->name('auth.validate_registration');
                });
            });
        });

        Route::controller(AuthController::class)->group(function() {
            Route::get('logout', 'logout')->name('logout');
        });
    });
});

Route::get('/reg', function() {
    return view('admin.registration');
});

// Route::get('/', function () {
//     return view('layouts.home', [
//         "title" => 'Beranda'
//     ]);
// });

// Route::get('/informasi', function () {
//     return view('layouts.informasi', [
//         "title" => 'Informasi'
//     ]);
// });

// Route::get('/layanan', function () {
//     return view('layouts.layanan', [
//         "title" => 'Layanan'
//     ]);
// });

// Route::get('/profil/visi-misi', function () {
//     return view('layouts.visi_misi', [
//         "title" => 'Profil - Visi Misi',
//     ]);
// });

// Route::get('/profil/gambaran-umum', function () {
//     return view('layouts.gambaran_umum', [
//         "title" => 'Profil - Gambaran Umum',
//     ]);
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });