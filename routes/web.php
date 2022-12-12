<?php

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
    return view('layouts.home', [
        "title" => 'Beranda'
    ]);
});

Route::get('/informasi', function () {
    return view('layouts.informasi', [
        "title" => 'Informasi'
    ]);
});

Route::get('/layanan', function () {
    return view('layouts.layanan', [
        "title" => 'Layanan'
    ]);
});

Route::get('/profil/visi-misi', function () {
    return view('layouts.visi_misi', [
        "title" => 'Profil - Visi Misi',
    ]);
});

Route::get('/profil/gambaran-umum', function () {
    return view('layouts.gambaran_umum', [
        "title" => 'Profil - Gambaran Umum',
        // "subtitle" => 'Gambaran Umum'
    ]);
});

Route::get('/welcome', function () {
    return view('welcome');
});