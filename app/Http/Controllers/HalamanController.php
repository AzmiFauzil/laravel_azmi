<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function halamanbaru()
    {
        $hari = "sabtu";
        $besok = "minggu";
        return view('halamanbaru', compact(['hari', 'besok']));
    }
}
