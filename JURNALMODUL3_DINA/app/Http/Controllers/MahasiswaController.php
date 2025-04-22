<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        $mahasiswa = [
            'nama' => 'Dina',
            'nim' => '102022300206',
            'email' => 'artadinaseptiani@gmail.com',
            'jurusan' => 'Sistem Informasi',
            'fakultas' => 'Rekayasa Industri',
            'foto' => asset('images/aku.jpg')
            
        ];
        // - Kirim object tersebut ke view 'profil'
        return view('profil', ['mahasiswa' => $mahasiswa]);
    }
}
