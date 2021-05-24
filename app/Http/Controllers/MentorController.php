<?php

namespace App\Http\Controllers;

use App\Models\Mentee;
use App\Models\Kegiatan;
use App\Models\Kelompok;
use App\Models\Materi;
use Illuminate\Http\Request;
use Svg\Tag\Rect;

class MentorController extends Controller
{
    // Dashboard Mentor
    public function index()
    {   
        $total_materi = Materi::count();
        $data_kegiatan = Kegiatan::all();

        $data_kelompok = Kelompok::where([
            ['mentor_id', '=', auth()->user()->mentor->id_mentor]
        ])->get()->first();

        $data_mentee = Mentee::where([
            ['kelompok_id', '=', $data_kelompok->id_kelompok]
        ])->get();

        $mentee = Mentee::where([
            ['kelompok_id', '=', $data_kelompok->id_kelompok]
        ])->count(); 
        return view('mentor.index',compact('data_kegiatan','mentee','data_kelompok','total_materi'));
    }

    // Profile Mentor
    public function profile(){
        return view('mentor.profile');
    }

    // Kelompok Mentor

        // Get Kelompok
        public function kelompok($id_mentor)
        {
            
            $data_kelompok = Kelompok::where([
                [   'mentor_id','=', $id_mentor]
            ])->get()->first();

            $data_mentee = Mentee::where([
                ['kelompok_id','=', $data_kelompok->id_kelompok]
            ])->get();

            $mentee = Mentee::where([
                ['kelompok_id','=', $data_kelompok->id_kelompok]
            ])->count();

            return view('mentor.kelompok',compact('data_kelompok','data_mentee','mentee'));
        }

    // Materi Mentor

        // Get Materi
        public function materi()
        {
            $data_materi = Materi::all();
            $totalMateri = Materi::count();
            $data_kegiatan = Kegiatan::all();
            return view('mentor.materi',compact('data_materi','data_kegiatan','totalMateri'));
        }
        // Add Materi
        public function addMateri(Request $request)
        {
            Materi::create($request->all());
            return redirect('/mentor/materi')->with('success', 'Materi Berhasil ditambahkan !');
        }
        // Delete Materi
        public function delMateri($id_materi)
        {
            $data_materi = Materi::find($id_materi);
            $data_materi->delete($data_materi);
            return redirect('/mentor/materi')->with('success', 'Materi Berhasil dihapus !');
        }
}
