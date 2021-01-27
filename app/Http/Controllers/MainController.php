<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('homepage.index');
    }
    public function auth(){
        return view('auth.index');
    }
}
