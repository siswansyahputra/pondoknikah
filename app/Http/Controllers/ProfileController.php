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
        return view('dashboard.profile', compact('data'));
    }

    public function changepassword(Request $request)
    {
        // Validasi input
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6',
        ]);

        // Ambil data user yang sedang login
        $user = auth()->user();

        // Cek apakah password lama yang dimasukkan sesuai dengan password yang tersimpan di database
        if (!Hash::check($request->current_password, $user->password)) {
            // Jika tidak sesuai, redirect kembali ke form dengan menampilkan pesan error
            return redirect()->route('dashboard')->with('failed', 'Password yang anda input tidak sesuai');
        }

        // Jika sesuai, ganti password user dengan password baru yang dimasukkan
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Redirect ke halaman yang sesuai dengan aplikasi Anda, sambil menampilkan pesan sukses
        return redirect()->route('dashboard')->with('success', 'Password berhasil diubah');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
