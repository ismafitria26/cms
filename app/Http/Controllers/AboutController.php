<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return 'NIM   : 2041720033 <br>
        NAMA  : Isma Fitria Risnandari <br>
        KELAS : TI-2G';
    }
}
