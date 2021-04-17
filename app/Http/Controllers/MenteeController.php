<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenteeController extends Controller
{
    // Dashboard 
    public function index()
    {
        $data_kegiatan = \App\Models\Kegiatan::all();
        return view('mentee.index', ['data_kegiatan' => $data_kegiatan]);
    }
    // Kelompok
    
    public function kelompok()
    {
        return view('mentee.kelompok');
    }

    // Materi dan Tugas
        // Materi 
        public function materi()
        {
            return view('mentee.materi');
        }
        // Detail Materi
        public function detailMateri()
        {
            return view('mentee.materi.detail');
        }
        // Detail Materi
        public function detailTugas()
        {
            return view('mentee.tugas.detail');
        }
    
    // Pertemuan
    
    public function pertemuan()
    {
        return view('mentee.pertemuan');
    }
    
    // Pengganti
    
    public function pengganti()
    {
        return view('mentee.pengganti');
    }

    // Keluhan
    
    public function keluhan()
    {
        return view('mentee.keluhan');
    }

}