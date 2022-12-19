<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('admin.dashboard.index');
    }
}
