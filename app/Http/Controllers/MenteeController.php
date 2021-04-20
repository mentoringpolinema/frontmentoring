<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Materi;
use App\Models\Mentee;
use App\Models\Pengumuman;
use App\Models\Pertemuan;
use App\Models\User;
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
            $data_materi = Materi::all();
            return view('mentee.materi',compact(['data_materi']));
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
        // Get Pertemuan
        public function pertemuan()
        { 
            $data_pertemuan = Pertemuan::all();
            return view('mentee.pertemuan.index',compact(['data_pertemuan']));
        }
    
    // Pengganti
    
    public function pengganti()
    {
        return view('mentee.pengganti');
    }

    // Keluhan
    
    public function keluhan()
    {
        return view('mentee.keluhan.index');
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
    // Profile
    public function profile()
    {
        $data_user = User::all();
        return view('mentee.profile.index');
    }

}