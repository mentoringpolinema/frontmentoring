<?php

namespace App\Http\Controllers;

use App\Models\Mentee;
use Facade\FlareClient\View;
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
    // public function cekMentoring(){
    //     return view('cek.index');
    // }
    public function cekMentoring(Request $request){
        if ($request->has('cari')) {
            $data_mentee = Mentee::where('nim_mentee','LIKE', $request->cari)->get();
            // dd($data_mentee);
        }
        else{
            return view('cek.index');
        }
        return view('cek.detail',compact('data_mentee'))->with('success','yeay');
    }
}
