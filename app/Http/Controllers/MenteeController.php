<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Kegiatan;
use App\Models\Kelas;
use App\Models\Keluhan;
use App\Models\Materi;
use App\Models\Mentee;
use App\Models\Pengumuman;
use App\Models\Pertemuan;
use App\Models\User;
use Illuminate\Http\Request;

class MenteeController extends Controller
{
    // Dashboard 
    public function index(Request $request)
    {
        $data_absensi = Absensi::where([
            ['mentee_id', '=', auth()->user()->mentee->id_mentee],
            ['pertemuan_id', '=', $request->id_pertemuan]
        ])->first();
        
        $data_kegiatan = Kegiatan::all();
        $data_pengumuman = Pengumuman::all();
        return view('mentee.index',compact(['data_kegiatan','data_pengumuman','data_absensi']));
    }
    // Kelompok
    
    public function kelompok($id_kelompok)
    {
        $data_mentee = Mentee::all();
        return view('mentee.kelompok',compact('data_mentee'));
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
        // Detail Pertemuan 
        public function detPertemuan($id_pertemuan)
        {   
            $data_absensi = Absensi::find($id_pertemuan);
            $data_pertemuan = Pertemuan::find($id_pertemuan);
            return view('mentee.pertemuan.detail', compact(['data_pertemuan']));
        }
        // Absen Pertemuan
        public function absenPertemuan(Request $request){

            $absen = Absensi::where([
                ['mentee_id', '=', auth()->user()->mentee->id_mentee],
                ['pertemuan_id', '=',$request->id_pertemuan]
            ])->first();

            if($absen){
                return redirect()->back()->with('warning', 'Anda Sudah Absen');
            }else{
                $request->request->add([
                'mentee_id' => auth()->user()->mentee->id_mentee,
                'pertemuan_id' => $request->id_pertemuan
                ]);
                $absensi = Absensi::create($request->all());
                return redirect()->back()->with('success','Berhasil Absen');
            }
        }
    
    // Pengganti
    
    public function pengganti()
    {
        return view('mentee.pengganti.index');
    }

    // Keluhan
        // Get Keluhan
        public function keluhan()
        {
            return view('mentee.keluhan.index');
        }
        // Tanya Keluhan
        public function tanyaKel(Request $request, $id_keluhan){
            $data_keluhan = Keluhan::find($id_keluhan);
            $data_keluhan->update($request->all());
            return redirect('/mentee/keluhan/')->with('success', 'Keluhan Berhasil !');
        }

    // Cetak
    
    Public function cetak()
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
        $data_mentee = Mentee::all();
        return view('mentee.profile.index',compact('data_mentee'));
    }

}