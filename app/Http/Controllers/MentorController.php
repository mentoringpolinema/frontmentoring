<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentorController extends Controller
{
    // Dashboard Mentor
    public function index()
    {
        $data_kegiatan = \App\Models\Kegiatan::all();
        return view('mentor.index', ['data_kegiatan' => $data_kegiatan]);
    }

    // Profile Mentor
    public function profile(){
        return view('mentor.profile');
    }

    // Kelompok Mentor

        // Get Kelompok
        public function kelompok()
        {
            return view('mentor.kelompok');
        }
    // Delete Kelompok

    // Update Kelompok

    // Materi Mentor

        // Get Materi
        public function materi()
        {
            $data_materi = \App\Models\Materi::all();
            $data_kegiatan = \App\Models\Kegiatan::all();
            return view('mentor.materi', ['data_materi' => $data_materi], ['data_kegiatan' => $data_kegiatan]);
        }
        // Add Materi
        public function addMateri(Request $request)
        {
            \App\Models\Materi::create($request->all());
            return redirect('/mentor/materi')->with('success', 'Materi Berhasil ditambahkan !');
        }
        // Delete Materi
        public function delMateri($id_materi)
        {
            $data_materi = \App\Models\Materi::find($id_materi);
            $data_materi->delete($data_materi);
            return redirect('/mentor/materi')->with('success', 'Materi Berhasil dihapus !');
        }
}
