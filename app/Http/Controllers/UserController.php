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

        //Validasi input dari form
        $data = [
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'noTelepon' => $request->input('nomorTelpon'),
            'password' => bcrypt($request->input('password')) // Enkripsi password
        ];

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            // Get the binary content of the image
            $data['fotoKTP'] = file_get_contents($image->getRealPath());
        } else {
            // Default to null if no image is provided or if invalid
            $data['fotoKTP'] = null;
        }

        // Save the user with the image data in the database
        $user = User::create($data);

        // Redirect or return a success view
        return redirect('/daftarPenyewaan');
    }

    // public function loginProses(Request $request)
    // {

    //     $data = [
    //         'email' => $request->input('email'),
    //         'password' => $request->input('password')
    //     ];

    //     $user = User::select('email', 'password')
    //         ->where('email', $data['email'])
    //         ->first();

    //     if($user['password'] == $data['password']){
    //         return redirect('/layanan');
    //     }


    //     // // Login gagal
    //     // return back()->withErrors([
    //     //     'email' => 'Email atau password salah.',
    //     // ])->onlyInput('email');
    // }

    
    public function loginProses(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        $user = User::where('email', $data['email'])->first();
    
        if ($user && Hash::check($data['password'], $user->password)) {
            // Jika login berhasil
            Auth::login($user); // Menggunakan sistem Auth Laravel untuk login
            return redirect('/layanan');
        }
    
        // Jika login gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }
}
