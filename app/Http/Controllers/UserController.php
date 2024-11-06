<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Helper\Helper;

class UserController extends Controller
{
    public function registerUser(Request $request):string //RedirectResponse
    {
        //Helper('form');

        //Validasi input dari form
        $data = [
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'nomorTelpon' => $request->input('nomorTelpon'),
            'password' => bcrypt($request->input('password')), // Enkripsi password
        ];

        $user = User::create($data);

        // Redirect atau kembalikan respons sukses
        return redirect()->route('/layanan')->with('success', 'Registrasi berhasil!');
    }
}
