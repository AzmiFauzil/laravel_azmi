<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return view('siswa');
    }
    public function tambah_siswa()
    {
        return view('tambah_siswa');
    }
}
