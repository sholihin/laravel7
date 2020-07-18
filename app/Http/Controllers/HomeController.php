<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function contact(){
        return view('contact');
    }

    public function postSiswa(Request $request){
        $siswa = new Siswa();
        $siswa->nama = $request->nama;
        $siswa->usia = $request->usia;
        $siswa->kelas = $request->kelas;
        $siswa->save();
    }
}
