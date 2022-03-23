<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class HomeController extends Controller
{
    // public function index(){
    //     return 'Hi! Selamat Datang di Website Laravel';
    // }
    // public function index(){
    //     return view('home', ['posts'=>Post::index()]);
    // }
    // public function index(){
    //     return view('dashboard');
    // }
    public function index()
    {
        $user = Auth::user();
        return view('dashboard',['user' => $user]);
    }
}
