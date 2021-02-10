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
        // Get Kegiatan
        public function kegiatan(){
            $data_kegiatan = \App\Models\Kegiatan::all();
            return view('admin.kegiatan', ['data_kegiatan' => $data_kegiatan]);
        }
        // Add Kegiatan
        public function addKegiatan(Request $request){
            \App\Models\Kegiatan::create($request->all());
            return redirect('/admin/kegiatan')->with('sukses', 'Data kegiatan Berhasil ditambahkan !');
        }
        // Delete Kegiatan
        public function delKegiatan($id_kegiatan)
        {
            $data_kegiatan = \App\Models\Kegiatan::find($id_kegiatan);
            $data_kegiatan->delete($id_kegiatan);
            return redirect('/admin/kegiatan')->with('sukses', 'Data Kegiatan Berhasil dihapus !');
        }

    // Mentor Function 
        // Get Mentor
        public function mentor()
        {
            $data_mentor = \App\Models\Mentor::all();
            return view('admin.mentor',['data_mentor'=> $data_mentor]);
        }
        // Add Mentor
        public function addMentor(Request $request){
            \App\Models\Mentor::create($request->all());
            return redirect('/admin/mentor')->with('sukses','Data Mentor Berhasil ditambahkan !');
        }
        // Delete Mentor
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

    // Data Function

        // Get Data
        public function data(){
        $data_jurusan = \App\Models\Jurusan::all();
        $data_prodi = \App\Models\Prodi::all();
        return view('admin.data', ['data_jurusan' => $data_jurusan], ['data_prodi' => $data_prodi]);
        }
        // Add Data
            // Add Jurusan
            public function addJurusan(Request $request)
            {
                \App\Models\Jurusan::create($request->all());
                return redirect('/admin/data')->with('sukses', 'Data Jurusan Berhasil ditambahkan !');
            }
            // Add Prodi
            public function addProdi(Request $request)
            {
                \App\Models\Prodi::create($request->all());
                return redirect('/admin/data')->with('sukses', 'Data Prodi Berhasil ditambahkan !');
            }
        // Delete Data
            // Delete Jurusan

            // Delete Prodi

    // Materi Function
    public function materi()
    {
        // $data_mentor = \App\Models\Mentor::all();
        return view('admin.materi');
    }
}
