<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Hi! Selamat Datang di Website Laravel';
    }
    public function about(){
        return 'NIM   : 2041720033 <br>
        NAMA  : Isma Fitria Risnandari <br>
        KELAS : TI-2G';
    }
    public function articles($id){
        return 'Ini adalah halaman Artikel
        dengan Id: '.$id;
    }
}
