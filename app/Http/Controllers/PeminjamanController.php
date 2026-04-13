<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
     public function peminjaman()
    {
        return view('peminjaman');
    }
    public function kirim(request $request)
    {
        $jumlah = $request->input1 + $request->input2;
        if ($jumlah > 50) { 
            echo $jumlah . " = diatas 50"; 
        } else { 
            echo $jumlah . " = dibawah 50"; 
        }
    }
}
