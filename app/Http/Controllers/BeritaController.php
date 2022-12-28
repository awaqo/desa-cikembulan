<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index() {
        $adminData = User::where('id', '=', auth()->id())->get();
        return view('admin.berita.index', compact('adminData'));
    }
}