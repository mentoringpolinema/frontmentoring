<?php

namespace App\Http\Controllers;

use App\Models\Mentee;
use App\Models\Kegiatan;
use App\Models\Kelompok;
use App\Models\User;
use App\Models\Materi;
use Illuminate\Http\Request;
use Svg\Tag\Rect;
use Illuminate\Support\Str;

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
             // Convert link materi untuk ditampilkan di embed

            // Dari input link youtube, dipecah berdasarkan /
            //explode itu string ke array
            $last = explode("/", $request->link_materi);

            //setelah jadi bagian2, ambil bagian yang terakhir. Setelah itu watch?v= nya direplace dengan embed/
            //0 dan 8 panjang dari watch?v=
            $convertedLast = substr_replace($last[3], "embed/", 0, 8);

            $embedLink = "https://youtube.com/" . $convertedLast;
            $materi = Materi::create([
                "nama_materi" => $request->nama_materi,
                "link_materi" => $request->link_materi,
                "kegiatan_id" => $request->kegiatan_id,
                "link_materi_embed" => $embedLink,
                "detail_materi" => $request->detail_materi,
                "user_id" => auth()->user()->id,
                "slug" => Str::slug($request->nama_materi, '-')
            ]);
            // $materi = Materi::create($request->all());
            return redirect('/mentor/materi')->with('success', 'Materi Berhasil ditambahkan !');
        }
        
        // Delete Materi
        public function delMateri($slug)
        {
            $data_materi = Materi::where('slug', $slug)->get()->first();;
            $data_materi->delete($data_materi);
            return redirect('/mentor/materi')->with('success', 'Materi Berhasil dihapus !');
        }
        // Get By Id Materi
        public function getByIdMateri(Request $request)
        {
            if ($request->ajax()) {
                $data_materi = Materi::findOrFail($request->id_materi);
                $data_kegiatan = Kegiatan::findOrFail($data_materi->kegiatan_id);
                $data_user = User::findOrFail($data_materi->user_id);
                return response()->json(['materi' => $data_materi, 'kegiatan' => $data_kegiatan, 'user' => $data_user]);
            }
        }
        // Edit Materi
        public function editMateri(Request $request)
        {
            $id = $request->id_materi_edit;
            $materi = Materi::findOrFail($id);
            $last = explode("/", $request->link_materi_edit);

            //setelah jadi bagian2, ambil bagian yang terakhir. Setelah itu watch?v= nya direplace dengan embed/
            //0 dan 8 panjang dari watch?v=
            $convertedLast = substr_replace($last[3], "embed/", 0, 8);

            $embedLink = "https://youtube.com/" . $convertedLast;
            $materi->update([
                "nama_materi" => $request->nama_materi_edit,
                "link_materi" => $request->link_materi_edit,
                "kegiatan_id" => $request->minggu_materi_edit,
                "link_materi_embed" => $embedLink,
                "detail_materi" => $request->detail_materi_edit
            ]);
            // dd($materi);
            return redirect('/admin/materi')->with('success', 'Materi Berhasil diedit !');
        }
}
