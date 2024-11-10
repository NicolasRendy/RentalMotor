<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Helper\Helper;

class UserController extends Controller
{
    public function registerUser(Request $request)//git s:string //RedirectResponse
    {
        //Helper('form');

        //Validasi input dari form
        $data = [
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'noTelepon' => $request->input('nomorTelpon'),
            'password' => bcrypt($request->input('password'))// Enkripsi password
        ];

        // Menyimpan gambar
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $imagePath = $image->store('fotoKTP', 'public');  // Menyimpan file di disk 'public'
        //     $data['fotoKTP'] = $imagePath;  // Menyimpan path file ke dalam array $data
        // }
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     // Mengambil konten gambar dalam bentuk biner
        //     $imageData = file_get_contents($image->getRealPath());
        //     // Mengonversi gambar ke bentuk base64, jika diperlukan
        //     $data['fotoKTP'] = $imageData; // Menyimpan gambar dalam bentuk biner
        // }
        // if ($request->hasFile('image') && $request->file('image')->isValid()) {
        //     $fotoKTP = file_get_contents($request->file('image')->getRealPath());
        //     $data['fotoKTP'] = $fotoKTP;
        // } else {
        //     // Jika tidak ada gambar atau gambar tidak valid
        //     $data['fotoKTP'] = null;
        // }

        // Get the image file
        $image = $request->file('image');

        // Open the file and read its contents into binary
        $imageData = file_get_contents($image->getRealPath());
        
        //$fotoKTP = file_get_contents($request->file('image')->getRealPath());
        $data['fotoKTP'] = $imageData;


        $user = User::create($data);


        // Redirect atau kembalikan respons sukses
        // return redirect()->route("/layanan");
        return view('layanan');
    }

}
