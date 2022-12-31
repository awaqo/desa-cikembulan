<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index() {
        $dataAdmin = User::orderBy('created_at', 'asc')->get();
        $adminData = User::where('id', '=', auth()->id())->get();
        return view('admin.akun.akun_admin', compact('dataAdmin', 'adminData'));
    }

    public function add_admin() {
        $adminData = User::where('id', '=', auth()->id())->get();
        return view('admin.akun.add_admin', compact('adminData'));
    }

    public function admin_by_id($id) {
        $adminData = User::where('id', '=', auth()->id())->get();
        $admin = User::where('id', $id)->get();

        return view('admin.akun.admin_by_id', compact('admin', 'adminData'));
    }

    public function update_admin(Request $request) {
        $id =  $request->id;
        $name = $request->input('name');
        $username = $request->input('username');

        User::where('id', $id)->update([
            'name' => $name,
            'username' => $username
        ]);

        return redirect('admin/akun')->with('success', 'Data admin berhasil di update');
    }

    public function hapus_akun(Request $request) {
        $akun = User::find($request->deleted_id);
        $akun->delete();

        return redirect('admin/akun')->with('success', 'Akun berhasil dihapus');
    }

    public function password($id) {
        $adminData = User::where('id', '=', auth()->id())->get();
        $data = User::where('id', $id)->get();
        return view('admin.akun.edit_password', compact('data', 'adminData'));
    }

    public function ubah_password(Request $request) {
        $id = $request->id;
        $request->validate([
            'current_password' => ['required', 'string', 'min:6'],
            'password' => ['required', 'string', 'min:6', 'confirmed']
        ]);

        $currentPwStatus = Hash::check($request->current_password, auth()->user()->password);
        if ($currentPwStatus) {
            User::where('id', $id)->update([
                'password'  =>  Hash::make($request->password)
            ]);

            return redirect('admin/akun')->with('password', 'Password berhasil diubah');
        } else {
            return redirect('admin/akun')->with('password-error', 'Password lama yang dimasukkan salah');
        }
    }
}