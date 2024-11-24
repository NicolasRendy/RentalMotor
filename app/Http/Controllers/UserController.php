<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Helper\Helper;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registerUser(Request $request) //:string //RedirectResponse
    {
        $data = [
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'noTelepon' => $request->input('nomorTelpon'),
            'password' => bcrypt($request->input('password')) // Enkripsi password
        ];

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $data['fotoKTP'] = file_get_contents($image->getRealPath());
        } else {
            $data['fotoKTP'] = null;
        }

        $user = User::create($data);

        // Redirect or return a success view
        return redirect('/daftarPenyewaan');
    }

    public function loginProses(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Data kredensial
        $credentials = $request->only('email', 'password');

        // Coba login
        if (Auth::attempt($credentials, true)) {
            // Regenerasi session
            $request->session()->regenerate();

            // Redirect ke halaman daftar penyewaan
            // return redirect('/daftarPenyewaan');
            return redirect()->intended('/daftarPenyewaan');
        }

        // Login gagal
        return redirect()->back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
