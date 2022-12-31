<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Berita;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    // Admin
    public function index() {
        $adminData = User::where('id', '=', auth()->id())->get();
        $dataBerita = Berita::paginate(10);
        // $dataBerita = Berita::orderBy('created_at', 'asc')->get();
        return view('admin.berita.index', compact('adminData', 'dataBerita'));
    }

    public function showBySlug($slug) {
        $adminData = User::where('id', '=', auth()->id())->get();
        $dataBerita = Berita::where('slug', $slug)->get();
        return view('admin.berita.detail_berita', compact('dataBerita', 'adminData'));
    }

    public function viewEditBerita($slug) {
        $adminData = User::where('id', '=', auth()->id())->get();
        $dataBerita = Berita::where('slug', $slug)->get();
        return view('admin.berita.edit_berita', compact('adminData', 'dataBerita'));
    }

    public function proses_editBerita(Request $request) {
        $slug = $request->slug;
        $updatedSlug = Str::slug($request->judul, '-');

        $data = Berita::where('slug', $slug)->get()->first();

        if ($request->file('gambar')) {
            unlink(storage_path('app/public/berita/' . $data->gambar ));

            $updatedGambar = $request->file('gambar');
            $updatedGambar->storeAs('public/berita', $updatedGambar->hashName());
            
            Berita::where('slug', $slug)->update([
                'judul' => $request->judul,
                'slug' => $updatedSlug,
                'konten' => $request->konten,
                'author' => $request->author,
                'gambar' => $updatedGambar->hashName(),
            ]);
        } else {
            Berita::where('slug', $slug)->update([
                'judul' => $request->judul,
                'slug' => $updatedSlug,
                'konten' => $request->konten,
                'author' => $request->author,
            ]);
        }


        return redirect()->route('indexBerita')->with('success', 'Berhasil mengupdate berita');
    }

    public function postView() {
        $adminData = User::where('id', '=', auth()->id())->get();
        return view('admin.berita.posting_berita', compact('adminData'));
    }

    public function posting(Request $request) {
        // dd($request->all());
        
        $slug = Str::slug($request->judul, '-');
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/berita', $gambar->hashName());

        Berita::create([
            'judul' => $request->judul,
            'slug' => $slug,
            'author' => $request->author,
            'konten' => $request->konten,
            'gambar' => $gambar->hashName(),
        ]);

        return redirect()->route('indexBerita')->with('success', 'Berhasil memposting berita');
    }

    public function ckUpImg(Request $request) {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
    
            $request->file('upload')->move(public_path('media/berita'), $fileName);
    
            $url = asset('media/berita/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }

    public function hapus_berita(Request $request) {
        $berita = Berita::find($request->deleted_id);

        $data = Berita::where('id', $request->deleted_id)->get()->first();
        unlink(storage_path('app\public\berita\\'.$data->gambar ));
        $berita->delete();

        return redirect()->route('indexBerita')->with('success', 'Berhasil menghapus berita');
    }

    // User

    public function indexUser() {
        $title = 'Berita Desa';
        $dataBerita = Berita::latest()->paginate(5);
        return view('layouts.berita.berita_desa', compact('title', 'dataBerita'));
    }

    public function beritaBySlug($slug) {
        $title = 'Berita Desa';
        $dataBerita = Berita::where('slug', $slug)->get();
        return view('layouts.berita.berita_by_slug', compact('title', 'dataBerita'));
    }
}