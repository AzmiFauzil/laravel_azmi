<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RumusKllSegitiga extends Controller
{
    public function rumuskllsegitiga()
    {
        $sisi1 = 5;
        $sisi2 = 7;
        $sisi3 = 10;

        $keliling = $sisi1 + $sisi2 + $sisi3;

        return view('rumuskllsegitiga', compact('keliling'));
}   
}
