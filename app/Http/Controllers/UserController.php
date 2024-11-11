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
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
    
        if(Auth::attempt($data,true)){
            return redirect('/daftarPenyewaan');
        }

        return redirect()->back()->with('gagal',"Email Atau Password Anda Salah!");
    }

    
    
}
