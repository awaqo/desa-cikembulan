<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        if (Auth::check()) {
            return redirect('admin/dashboard');
        }

        return redirect('admin/login');
    }

    public function dashboard() {
        $adminData = User::where('id', '=', auth()->id())->get();
        $admin = User::count();
        $pengaduan = Pengaduan::count();
        return view('admin.dashboard.index', compact('adminData', 'admin', 'pengaduan'));
    }
}
