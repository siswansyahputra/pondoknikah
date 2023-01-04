<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Identity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
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
            'title' => "Registrasi",
            'description' => ""
        ];

        return view('login.registrasi', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // Validasi pendaftaran
        $dataUsers = $request->validate([
            'username' => 'required|min:6|max:255|unique:users',
            'name' => 'required|max:255',
            'password' => 'required|min:6|max:255',
            'password_confirmation' => 'required|min:6|max:255|same:password',
            'nowa' => 'required|min:10|max:20',
            'referral' => 'max:20'
        ]);

        // Enkripsi password
        $dataUsers['password'] = Hash::make($dataUsers['password']);

        // Create data ke tabel User
        User::create($dataUsers);

        // Pesan pendaftaran
        $data = [
            'identity' => Identity::find(),
            'title' => "Registrasi",
            'description' => "Proses pendaftaran anda berhasil, silahkan hubungi admin untuk mengaktifkan akun. Terimakasih..."
        ];

        // Kirim data identitas ke view
        return view('login.message', compact('data'));
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
