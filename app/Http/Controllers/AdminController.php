<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Dashboard Functon
    public function index()
    {
        $count = \App\Models\Mentor::where('id_mentor',1)->count();
        return view('admin.index',['data_mentor'=> $count]);
    }
    
    // Mentor Function 
    public function mentor()
    {
        $data_mentor = \App\Models\Mentor::all();
        return view('admin.mentor',['data_mentor'=> $data_mentor]);
    }

    public function addMentor(Request $request){
        \App\Models\Mentor::create($request->all());
        return redirect('/admin/mentor')->with('sukses','Data Mentor Berhasil ditambahkan !');
    }
    public function delMentor($id_mentor){
        $data_mentor = \App\Models\Mentor::find($id_mentor);
        $data_mentor->delete($data_mentor);
        return redirect('/admin/mentor')->with('sukses', 'Data Mentor Berhasil dihapus !');
    }
}
