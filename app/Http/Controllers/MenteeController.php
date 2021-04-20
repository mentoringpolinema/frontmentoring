<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Mentee;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class MenteeController extends Controller
{
    // Dashboard 
    public function index()
    {
        $data_kegiatan = Kegiatan::all();
        $data_pengumuman = Pengumuman::all();
        return view('mentee.index',compact(['data_kegiatan','data_pengumuman']));
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

    // Cetak
    
    public function cetak()
    {
        $data_mentee = Mentee::all();
        return view('mentee.cetak.index', ['data_mentee' => $data_mentee]);
    }
    public function print()
    {
        return view('mentee.cetak.print');
    }

}