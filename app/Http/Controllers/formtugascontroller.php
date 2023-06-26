<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formtugascontroller extends Controller
{
     public function index(){
        return view('form_tugas9');
}

// buat function yang di dalam nya mengambil inputan form
// dengan menggunakan parameter $request
// dan lakukan pengecekan apakah nama all sudah di isi atau belum (/required)

public function hasil_tugas9(Request $request){
    $this->validate($request, [
        "nama" => 'required',
        "email" => 'required',
        "lokasi" => 'required',
        "jenis_kelamin" => 'required',
        "skill" => 'required',
    ]);
    return view('hasil_tugas9', ['data' => $request]);
}
}
