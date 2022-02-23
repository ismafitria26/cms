<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return 'Hi! Selamat Datang di Website Isma Fitria';
    }
}
