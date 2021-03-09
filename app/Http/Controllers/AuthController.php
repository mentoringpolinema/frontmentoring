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
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard')->with('success', 'Yeay Anda Berhasil Login !');
        }else{
            return redirect('/auth')->with('error', 'User/Pass Anda Salah Goblok !');
        }
    }
    // public function login(Request $request, $user)
    // {
    //     if ($user->hasRole('Panitia')) {
    //         return redirect()->route('admin.index');
    //     }elseif($user->hasRole('Mentor')){
    //         return redirect()->route('mentor.index');
    //     }
    //     return redirect()->route('mentee.index');
    // }
    public function logout(){
        Auth::logout(); 
        return redirect('/auth');
    }
}
