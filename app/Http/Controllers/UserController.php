<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
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
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // Coba login sebagai admin
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();

            $admin = Auth::guard('admin')->user(); // Mendapatkan data admin yang login
            session([
                'role' => 'admin',
                'id' => $admin->id_admin,
                'email' => $admin->email,
                'noTelp' => $admin->noTelp,
            ]);

            return redirect('/kelola'); // Redirect ke dashboard admin
        }

        // Coba login sebagai user
        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::guard('web')->user(); // Mendapatkan data user yang login
            session([
                'role' => 'user',
                'id_pelanggan' => $user->id_pelanggan,
                'nama' => $user->nama,
                'email' => $user->email,
                'alamat' => $user->alamat,
            ]);

            return redirect()->intended('/daftarPenyewaan');
        }

        // Login gagal
        return redirect()->back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }



    public function logout(Request $request)
    {
        // Cek apakah user login sebagai admin
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout(); // Logout admin
    
            $request->session()->invalidate();
            $request->session()->regenerateToken();
    
            return redirect()->route('admin.login');  // Pastikan mengarahkan ke rute admin login
        }

        // Cek apakah user login sebagai user biasa
        if (Auth::guard('web')->check()) {
            Auth::guard('web')->logout(); // Logout user

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/login');
        }
        
    }
}
