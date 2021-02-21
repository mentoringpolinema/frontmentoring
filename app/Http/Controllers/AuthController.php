<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }
    public function login(Request $request){
        // $password = "irfak123";
        // $hashesh = Hash::make($password);
        // echo $hashesh;
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/admin');
        }else{
            return redirect('/auth');
        }
    }
    public function logout(){
        Auth::logout(); 
        return redirect('/auth');
    }
}
