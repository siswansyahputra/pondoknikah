<?php

namespace App\Http\Controllers;

use App\Models\Identity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'identity' => Identity::find(),
            'title' => "Profile"
        ];
        return view('dashboard.profile.index', compact('data'));
    }
    public function formPassword()
    {
        $data = [
            'identity' => Identity::find(),
            'title' => "Change Password"
        ];
        return view('dashboard.profile.password', compact('data'));
    }

    public function changepassword(Request $request)
    {
        // Validasi input
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6',
            'password_confirmation' => 'required|min:6|same:new_password',
        ]);

        // Ambil data user yang sedang login
        $user = auth()->user();

        // Cek apakah password lama yang dimasukkan sesuai dengan password yang tersimpan di database
        if (!Hash::check($request->current_password, $user->password)) {
            // Jika tidak sesuai, redirect kembali ke form dengan menampilkan pesan error
            return redirect()->route('dashboard')->with('Passwordfailed', 'Password yang anda input tidak sesuai');
        }

        // Jika sesuai, ganti password user dengan password baru yang dimasukkan
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Redirect ke halaman yang sesuai dengan aplikasi Anda, sambil menampilkan pesan sukses
        return redirect()->route('dashboard')->with('Passwordsuccess', 'Password berhasil diubah');
    }
    public function updateProfile(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|max:255',
            'nowa' => 'required'
        ]);

        // Ambil data user yang sedang login
        $user = auth()->user();
        $user->name = $request->name;
        $user->nowa = $request->nowa;
        $user->save();
        return redirect()->route('profile')->with('Profilesuccess', 'Profile berhasil diubah');
    }
}
