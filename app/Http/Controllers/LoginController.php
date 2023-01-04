<?php

namespace App\Http\Controllers;

use App\Models\Identity;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        // $data = Identity::find();
        $data = [
            'identity' => Identity::find(),
            'title' => "Login",
            'message' => "Silahkan hubungi admin untuk mendapatkan link reset password. Terimakasih..."
        ];
        return view('login.index', compact('data'));
    }
    public function authentication(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'min:6'],
            'password' => ['required', 'min:6'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }
        return back()->with('loginError', 'login gagal!')->onlyInput('username');
    }
    public function message()
    {
        $data = [
            'identity' => Identity::find(),
            'title' => "Login",
            'description' => "Silahkan hubungi admin untuk mendapatkan link reset password. Terimakasih..."
        ];

        //Kirim data identitas ke view
        return view('login.message', compact('data'));
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
