<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class MainController extends Controller
{
    public function index() {
        $title = 'Beranda';
        $dataBerita = Berita::latest('created_at')->take(3)->get();
        return view('layouts.home', compact('title', 'dataBerita'));
    }

    public function informasi() {
        return view('layouts.informasi', [
            "title" => 'Informasi'
        ]);
    }

    public function layanan() {
        return view('layouts.layanan.layanan', [
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
        return view('layouts..layanan.pengaduan', [
            "title" => 'Pengaduan',
        ]);
    }
}