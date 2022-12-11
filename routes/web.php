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
    return view('layouts.home');
});

Route::get('/informasi', function () {
    return view('layouts.informasi');
});

Route::get('/layanan', function () {
    return view('layouts.layanan');
});

Route::get('/welcome', function () {
    return view('welcome');
});