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
            return redirect('/admin/kegiatan')->with('success','kegiatan Berhasil ditambahkan !');
        }
        // Delete Kegiatan
        public function delKegiatan($id_kegiatan)
        {
            $data_kegiatan = \App\Models\Kegiatan::find($id_kegiatan);
            $data_kegiatan->delete($id_kegiatan);
            return redirect('/admin/kegiatan')->with('success', 'Kegiatan Berhasil dihapus !');
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
            return redirect('/admin/mentor')->with('success','Mentor Berhasil ditambahkan !');
        }
        // Delete Mentor
        public function delMentor($id_mentor){
            $data_mentor = \App\Models\Mentor::find($id_mentor);
            $data_mentor->delete($data_mentor);
            return redirect('/admin/mentor')->with('success','Mentor Berhasil dihapus !', 'Anjay');
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
                return redirect('/admin/data')->with('success', 'Data Jurusan Berhasil ditambahkan !');
            }
            // Add Prodi
            public function addProdi(Request $request)
            {
                \App\Models\Prodi::create($request->all());
                return redirect('/admin/data')->with('success', 'Data Prodi Berhasil ditambahkan !');
            }
        // Delete Data
            // Delete Jurusan

            // Delete Prodi

    // Materi Function
        
        // Get Materi
        public function materi()
        {
            $data_materi = \App\Models\Materi::all();
            $data_kegiatan = \App\Models\Kegiatan::all();
            return view('admin.materi', ['data_materi' => $data_materi], ['data_kegiatan' => $data_kegiatan]);
        }
        // Add Materi
        public function addMateri(Request $request){
            \App\Models\Materi::create($request->all());
            return redirect('/admin/materi')->with('success', 'Materi Berhasil ditambahkan !');
        }
        // Delete Materi
        public function delMateri($id_materi)
        {
            $data_materi = \App\Models\Materi::find($id_materi);
            $data_materi->delete($data_materi);
            return redirect('/admin/materi')->with('success', 'Materi Berhasil dihapus !');
        }

    // Kelompok Function

        // Get Kelompok
        public function kelompok()
        {
            return view('admin.kelompok');
        }
}
