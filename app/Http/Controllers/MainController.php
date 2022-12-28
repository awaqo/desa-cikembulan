<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('layouts.home', [
            "title" => 'Beranda'
        ]);
    }

    public function informasi() {
        return view('layouts.informasi', [
            "title" => 'Informasi'
        ]);
    }

    public function layanan() {
        return view('layouts.layanan', [
            "title" => 'Layanan'
        ]);
    }

    public function visi_misi() {
        return view('layouts.visi_misi', [
            "title" => 'Profil - Visi Misi',
        ]);
    }

    public function gambaran_umum() {
        return view('layouts.gambaran_umum', [
            "title" => 'Profil - Gambaran Umum',
        ]);
    }

    public function form_pengaduan() {
        return view('layouts.pengaduan', [
            "title" => 'Pengaduan',
        ]);
    }
}