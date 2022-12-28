<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Pengaduan;
use App\Models\User;
use App\Notifications\AduanDiterima;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;
use PDF;

class PengaduanController extends Controller
{
    public function __construct(Request $request) {
        $no = 1;
        View::share('no', $no);
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

        // Kirim Notifikasi ke Email User
        $dataUser = Pengaduan::orderBy('created_at', 'desc')->first();

        $penerima = [
            $dataUser['email'] => $dataUser['nama']
        ];

        Notification::route('mail', $penerima)->notify(new AduanDiterima());

        return redirect()->route('layanan')->with('success', 'Laporan pengaduan Anda berhasil disubmit, Kami akan segera memprosesnya. Mohon berkenan untuk menunggu 🙏');
    }

    public function show_data() {
        $pengaduanData = Pengaduan::paginate(10);
        $adminData = User::where('id', '=', auth()->id())->get();
        return view('admin.pengaduan.index', compact('pengaduanData', 'adminData'));
    }

    public function show_by_id($id) {
        $pengaduanData = Pengaduan::where('id',$id)->get();
        $adminData = User::where('id', '=', auth()->id())->get();
        return view('admin.pengaduan.show_by_id', compact('pengaduanData', 'adminData'));
    }

    // Preview PDF
    public function previewPDF($id) {
        $showData = Pengaduan::where('id', $id)->get();
        return view('admin.pengaduan.laporan_pengaduan_pdf', compact('showData'));
    }

    // Export to PDF
    public function exportPDF($id) {
        $showData = Pengaduan::where('id', $id)->get();
        $pdf = PDF::loadView('admin.pengaduan.laporan_pengaduan_pdf', ['showData' => $showData]);
        return $pdf->download('laporan_pengaduan_'.$id.'.pdf');
    }

    public function hapus($id) {
        $data = Pengaduan::find($id);
        $data->delete();

        return redirect()->route('admin_pengaduan')->with('success', 'Data berhasil dihapus');
    }
}
