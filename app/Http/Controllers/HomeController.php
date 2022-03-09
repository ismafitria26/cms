<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    // public function index(){
    //     return 'Hi! Selamat Datang di Website Laravel';
    // }
    public function index(){
        return view('home', ['posts'=>Post::index()]);
    }
}
