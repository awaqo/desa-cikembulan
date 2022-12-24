<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    public function __construct(Request $request) {
        $no = 1;
        View::share('no', $no);
    }

    public function index() {
        return view('layouts.pengaduan', [
            "title" => 'Pengaduan'
        ]);
    }

    public function proses_pengaduan(Request $request) {
        $file_pendukung = $request->file('file_pendukung');
        $file_pendukung->storeAs('public/pengaduan', $file_pendukung->hashName());

        Pengaduan::create([
            // data diri
            'nama' => $request->nama,
            'nik' => $request->nik,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,

            // alamat
            'prov' => $request->prov,
            'kab_kota' => $request->kab_kota,
            'kec' => $request->kec,
            'desa_kelurahan' => $request->desa_kelurahan,
            'alamat_ktp' => $request->alamat_ktp,

            // aduan
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file_pendukung' => $file_pendukung->hashName(),
        ]);

        return redirect()->route('layanan')->with('success', 'Laporan pengaduan Anda berhasil disubmit, Kami akan segera memprosesnya. Mohon berkenan untuk menunggu 🙏');
    }

    public function show_data() {
        $pengaduanData = Pengaduan::paginate(10);
        return view('admin.pengaduan.index', compact('pengaduanData'));
    }

    public function show_by_id($id) {
        $pengaduanData = Pengaduan::where('id',$id)->get();
        return view('admin.pengaduan.show_by_id', compact('pengaduanData'));
    }
}
