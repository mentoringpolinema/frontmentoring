<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Dashboard Functon
    public function index()
    {
        $data_kegiatan = \App\Models\Kegiatan::all();
        return view('admin.index', ['data_kegiatan' => $data_kegiatan]);
    }

    // Kegiatan Function
    public function kegiatan(){
        $data_kegiatan = \App\Models\Kegiatan::all();
        return view('admin.kegiatan', ['data_kegiatan' => $data_kegiatan]);
    }
    public function addKegiatan(Request $request){
        \App\Models\Kegiatan::create($request->all());
        return redirect('/admin/kegiatan')->with('sukses', 'Data kegiatan Berhasil ditambahkan !');
    }
    public function delKegiatan($id_kegiatan)
    {
        $data_kegiatan = \App\Models\Kegiatan::find($id_kegiatan);
        $data_kegiatan->delete($id_kegiatan);
        return redirect('/admin/kegiatan')->with('sukses', 'Data Kegiatan Berhasil dihapus !');
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

    // Mentee Function
    public function mentee()
    {
        // $data_mentor = \App\Models\Mentor::all();
        return view('admin.mentee');
    }

    // Users Function
    public function user(){
        return view('admin.user');
    }
}
