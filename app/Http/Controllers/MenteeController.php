<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\CetakBukti;
use App\Models\Kegiatan;
use App\Models\Kelas;
use App\Models\Keluhan;
use App\Models\Materi;
use App\Models\Mentee;
use App\Models\PengumpulanTugas;
use App\Models\Pengumuman;
use App\Models\Pertemuan;
use App\Models\Tugas;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;
use Svg\Tag\Rect;

class MenteeController extends Controller
{
    // Dashboard
    public function index(Request $request)
    {
        // Get Data Mentee
        $data_mentee = Mentee::where([
            ['id_mentee', '=', auth()->user()->mentee->id_mentee]
        ])->first();

        // Cek Kelulusan
        $tugas = PengumpulanTugas::where([
            "mentee_id" => $data_mentee->id_mentee,
            "status_tugas" => "Diterima"
        ])->count();
        $pertemuan = Absensi::where([
            "mentee_id" => $data_mentee->id_mentee
        ])->count();
        $status = $tugas + $pertemuan;
        // Tes Status Count
        // dd($status);
        // Get Another Data
        $data_kegiatan = Kegiatan::where('jenis_kegiatan','!=','Pengganti')->paginate(5);
        $data_pengumuman = Pengumuman::orderBy('id_pengumuman', 'desc')->paginate(5);

        $total_kegiatan = Kegiatan::all()->count();
        $total_materi = Materi::all()->count();
        $total_pertemuan = Pertemuan::all()->count();
        $total_tugas = PengumpulanTugas::where('mentee_id','=',auth()->user()->mentee->id_mentee)->count();

        return view('mentee.index',compact(['data_kegiatan','data_pengumuman','data_mentee', 'total_kegiatan', 'total_materi', 'total_pertemuan', 'total_tugas','status']));
    }
    // Kelompok

    public function kelompok($id_kelompok)
    {
        $data_mentee = Mentee::where([
            ['kelompok_id', '=', $id_kelompok]
        ])->get();
        $total_mentee = Mentee::where('kelompok_id','=',$id_kelompok)->count();
        return view('mentee.kelompok',compact('data_mentee','total_mentee'));
    }

    // Materi dan Tugas
        // Materi
        public function materi()
        {
            $data_materi = Materi::where('id_materi','!=','7')->get();
            $data_tugas = Tugas::all();
            // dd($data_materi);
            return view('mentee.materi',compact(['data_materi'],['data_tugas']));
        }
        // Detail Materi
        public function detailMateri($id_materi)
        {
            $data_materi = Materi::find($id_materi);
            return view('mentee.materi.detail',compact('data_materi'));
        }
        // Detail Tugas
        public function detailTugas($id_tugas)
        {
            $data_tugasku = PengumpulanTugas::where([
                ['mentee_id', '=', auth()->user()->mentee->id_mentee],
                ['tugas_id', '=', $id_tugas],
            ])->get();
            // dd($tugasku);
            $data_tugas = Tugas::find($id_tugas);

            return view('mentee.tugas.detail',compact('data_tugas','data_tugasku'));
        }
        // Upload Tugas
        public function uploadTugas(Request $request,$id_tugas)
        {
            $cek_tugas = PengumpulanTugas::where([
                ['mentee_id', '=', auth()->user()->mentee->id_mentee],
                ['tugas_id', "=" ,$request->tugas_id]
            ])->first();

            if ($cek_tugas) {
                Alert::error('yaah','kamu sudah mengumpulkan !');
                return redirect()->back();
            } else { 
                if ($request->hasFile('file_tugas')) {

                    $request->validate([
                        'file_tugas' => 'required|max:2048|mimes:pdf',
                    ]);
                        
                    $request->file('file_tugas')->move('file_tugas/', $request->file('file_tugas')->getClientOriginalName());
                    $uploadTugas = PengumpulanTugas::create([
                        "mentee_id" => auth()->user()->mentee->id_mentee,
                        "file_tugas" => $request->file('file_tugas')->getClientOriginalName(),
                        "tugas_id" => $id_tugas,
                        "status_tugas" => "Pending"
                        ]);

                        Alert::success('Yeay', 'Tugas Berhasil dikumpulkan !');
                    }
                return redirect()->back(); 
            }
        }
        // Delete Tugas
        public function deleteTugas($id_pengumpulan_tugas){
            $tugas = PengumpulanTugas::find($id_pengumpulan_tugas);

            $file_name = $tugas->file_tugas;
            $file_path = public_path('file_tugas/' . $file_name);
            unlink($file_path);

            $tugas->delete();

            Alert::success('Tugas berhasil dihapus !', 'Segera upload lagi ya ! ');
            return redirect()->back();
        }

    // Pertemuan
        // Get Pertemuan
        public function pertemuan()
        {
            $data_pertemuan = Pertemuan::where([
                "mentor_id" => auth()->user()->mentee->kelompok->mentor->id_mentor
            ])->get();
            // dd($data_pertemuan);
            return view('mentee.pertemuan.index',compact(['data_pertemuan']));
        }
        // Detail Pertemuan
        public function detPertemuan($id_pertemuan)
        {
            $data_pertemuan = Pertemuan::find($id_pertemuan);
            $data_absensi = Absensi::where([
                "mentee_id" => auth()->user()->mentee->id_mentee,
                "kegiatan_id" => $data_pertemuan->kegiatan_id
                ])->first();
            // dd($data_absensi);
            return view('mentee.pertemuan.detail', compact(['data_pertemuan','data_absensi']));
        }
        // Absen Pertemuan
        public function absenPertemuan(Request $request){

            $absen = Absensi::where([
                ['mentee_id', '=', auth()->user()->mentee->id_mentee],
                ['kegiatan_id', '=',$request->kegiatan_id]
            ])->first();

            if($absen){
                return redirect()->back()->with('warning', 'Anda Sudah Absen');
            }else{  
                $request->request->add([
                'mentee_id' => auth()->user()->mentee->id_mentee,
                'kegiatan_id' => $request->kegiatan_id
                ]);
                $absensi = Absensi::create($request->all());
                return redirect()->back()->with('success','Berhasil Absen');
            }
        }

    // Pengganti
        // Get Pengganti
        public function pengganti()
        {
            $tugas = Tugas::all();
            return view('mentee.pengganti.index',compact('tugas'));
        }
        // Detail Pengganti
        public function detailPengganti(){
            return view('mentee.pengganti.detail');
        }

    // Keluhan
        // Get Keluhan
        public function keluhan(Request $request)
        {
            $data_mentee = Mentee::where([
                ['id_mentee', '=', auth()->user()->mentee->id_mentee]
            ])->first();

            $keluhan = Keluhan::where([
                ['mentee_id', '=', auth()->user()->mentee->id_mentee]
            ])->get();

            if ($keluhan) {
                // dd($keluhan);
                return view('mentee.keluhan.index', compact('keluhan'));
            } else {
                return view('mentee.keluhan.form',compact('data_mentee'));
            }
        }
        // Kirim Keluhan
        public function kirimKeluhan(Request $request){
            $cekKeluhan = Keluhan::where([
                ['mentee_id', '=', auth()->user()->mentee->id_mentee],
                ['keterangan_keluhan','=',$request->keterangan_keluhan]
            ])->first();

            if ($cekKeluhan) {
                Alert::error('waah :(', 'Maaf ya, keluhan hanya Satu Kali saja');
                return redirect()->back();
            } else {
                $keluhan = Keluhan::create([
                    "mentee_id" => auth()->user()->mentee->id_mentee,
                    "keterangan_keluhan" => $request->keterangan_keluhan,
                    "isi_keluhan" => $request->isi_keluhan,
                    "status_keluhan" => "Pending"
                ]);
                // dd($keluhan);
                Alert::success('Yeay', 'Keluhan Berhasil dikirim !');
                return redirect('/mentee/keluhan/');
            }
        }
        // Detail Keluhan
        public function detailKeluhan($id_keluhan){
            $data_keluhan = Keluhan::find($id_keluhan);
            return view('mentee.keluhan.detail',compact('data_keluhan'));
        }
        // Keluhan Form
        public function keluhanForm(){
            $data_mentee = Mentee::where([
                ['id_mentee', '=', auth()->user()->mentee->id_mentee]
            ])->first();

            return view('mentee.keluhan.form', compact('data_mentee'));
        }
        // Hapus Keluhan
        public function hapusKeluhan($id_keluhan)
        {
            $data_keluhan = Keluhan::find($id_keluhan);
            $data_keluhan->delete($id_keluhan);
            Alert::success('Berhasil !','Keluhan Berhasil di hapus !');
            return redirect()->back();
        }
    // Cetak

    Public function cetak(Request $request)
    {
        $data_mentee = Mentee::where([
            ['id_mentee', '=', auth()->user()->mentee->id_mentee]
        ])->first();

        $cetak = CetakBukti::where([
            ['mentee_id', '=', auth()->user()->mentee->id_mentee]
        ])->first();

        if ($cetak) {
            return view('mentee.cetak.index', compact('data_mentee','cetak'));
        } else {
            $addcetak = CetakBukti::create([
                "mentee_id" => auth()->user()->mentee->id_mentee,
                "kode_cetak" => "CB". auth()->user()->mentee->nim_mentee,
                "status_cetak" => "Pending"
            ]);
            return redirect()->back()->with('success','Bukti Telah tercetak !');
        }

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

    // Kegiatan
        // Get Kegiatan
        public function kegiatan(){
            $data_kegiatan = Kegiatan::where([
                "jenis_kegiatan" => "Kegiatan Wajib",
            ])->get();
            return view('mentee.kegiatan.index',compact('data_kegiatan'));
        }
        // Detail Kegiatan
        public function detailKegiatan($id_kegiatan){
            $data_kegiatan = Kegiatan::find($id_kegiatan);
            $data_absensi = Absensi::where([
                "mentee_id" => auth()->user()->mentee->id_mentee,
                "kegiatan_id" => $data_kegiatan->id_kegiatan
            ])->first();

            // dd($data_absensi);
            return view('mentee.kegiatan.detail',compact('data_kegiatan','data_absensi'));
        }
        // Absen Kegiatan
        public function absenKegiatan(Request $request){
            $absen = Absensi::where([
                ['mentee_id', '=', auth()->user()->mentee->id_mentee],
                ['kegiatan_id', '=', $request->kegiatan_id]
            ])->first();

            if ($absen) {
                return redirect()->back()->with('warning', 'Anda Sudah Absen');
            } else {
                $request->request->add([
                    'mentee_id' => auth()->user()->mentee->id_mentee,
                    'kegiatan_id' => $request->kegiatan_id
                ]);
                $absensi = Absensi::create($request->all());
                return redirect()->back()->with('success', 'Berhasil Absen');
            }
        }

}
