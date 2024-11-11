<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Helper\Helper;

class UserController extends Controller
{
    public function registerUser(Request $request)//git s:string //RedirectResponse
    {

        //Validasi input dari form
        $data = [
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'noTelepon' => $request->input('nomorTelpon'),
            'password' => bcrypt($request->input('password'))// Enkripsi password
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
        return view('layanan');
    }

}
