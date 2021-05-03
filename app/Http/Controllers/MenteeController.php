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
use App\Models\Tugas;
use App\Models\User;
use Illuminate\Http\Request;

class MenteeController extends Controller
{
    // Dashboard
    public function index(Request $request)
    {
        $data_mentee = Mentee::where([
            ['id_mentee', '=', auth()->user()->mentee->id_mentee]
        ])->first();

        $data_kegiatan = Kegiatan::all();
        $data_pengumuman = Pengumuman::all();

        $total_kegiatan = Kegiatan::all()->count();
        $total_materi = Materi::all()->count();
        $total_pertemuan = Pertemuan::all()->count();
        $total_tugas = Tugas::all()->count();

        return view('mentee.index',compact(['data_kegiatan','data_pengumuman','data_mentee', 'total_kegiatan', 'total_materi', 'total_pertemuan', 'total_tugas']));
    }
    // Kelompok

    public function kelompok($id_kelompok)
    {
        $data_mentee = Mentee::where([
            ['kelompok_id', '=', $id_kelompok]
        ])->get();
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
        public function keluhan(Request $request)
        {
            $keluhan = Keluhan::where([
                ['mentee_id', '=', auth()->user()->mentee->id_mentee]
            ])->first();

            if ($keluhan) {
                return view('mentee.keluhan.index', compact('keluhan'));
            } else {
            // $request->request->add(['mentee_id' => auth()->user()->mentee->id_mentee]);

                $keluhan = Keluhan::create([
                    'mentee_id' => auth()->user()->mentee->id_mentee,
                    "panitia_id" => '1',
                    "isi_keluhan" => 'Belum Ada Pesan !',
                    "jawab_keluhan" => 'Assalamualaikum, Silahkan kirim kan keluhan anda. Terimakasih',
                ]);
                return view('mentee.keluhan.index', compact('keluhan'));
            }

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
        $data_mentee = Mentee::where([
            ['id_mentee', '=', auth()->user()->mentee->id_mentee]
        ])->first();
        return view('mentee.profile.index',compact('data_mentee'));
    }
    // Update Profile
    public function updProfile(Request $request, $id_mentee){
        $data_mentee = Mentee::find($id_mentee);
        $data_mentee->update($request->all());
        return redirect()->back()->with('success','Profile Berhasil Diupdate');
    }

}
