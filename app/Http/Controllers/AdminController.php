<?php

namespace App\Http\Controllers;

use App\Exports\JurusanExport;
use App\Exports\MentorExport;
use App\Imports\MentorImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

use App\Models\Kegiatan;
use App\Models\Kelompok;
use App\Models\Mentee;
use App\Models\Mentor;
use App\Models\Materi;
use App\Models\Jurusan;
use App\Models\Pertemuan;
use App\Models\Prodi;
use App\Models\User;
use App\Models\Pengumuman;

class AdminController extends Controller
{
    // Dashboard Function
    public function index()
    {
        $totalMentee = Mentee::count();
        $totalMentor = Mentor::count();
        $data_kegiatan = Kegiatan::all();
        $totalKegiatan = Kegiatan::count();
        $totalMateri = Materi::count();
        $totalJurusan = Jurusan::count();
        $totalProdi = Prodi::count();
        return view('admin.index',compact([
            'totalMentee',
            'data_kegiatan',
            'totalMentor',
            'totalKegiatan',
            'totalMateri',
            'totalJurusan',
            'totalProdi']));
    }

    //-------------------------------------------Kegiatan-------------------------------------------

    //Function Kegiatan
    public function kegiatan()
    {
        $data_kegiatan = Kegiatan::all();
        $totalKegiatan = Kegiatan::count();
        return view('admin.kegiatan', compact(['data_kegiatan','totalKegiatan']));
    }

    // Add Kegiatan
    public function addKegiatan(Request $request)
    {
        $kegiatan = Kegiatan::create($request->all());
        return redirect('/admin/kegiatan')->with('success', 'Kegiatan Berhasil ditambahkan !');
    }

    // Delete Kegiatan
    public function delKegiatan($id_kegiatan)
    {
        $data_kegiatan = Kegiatan::find($id_kegiatan);
        $data_kegiatan->delete($data_kegiatan);
        return redirect('/admin/kegiatan')->with('success', 'Kegiatan Berhasil dihapus !');
    }

    // Get By Id Kegiatan
    public function getByIdKegiatan(Request $request){
        if($request->ajax()){
            $data = Kegiatan::findOrFail($request->id_kegiatan);
            return response()->json(['options'=>$data]);
        }
    }

    // Edit Kegiatan
    public function editKegiatan(Request $request)
    {
        $id = $request->id_kegiatan_edit;
        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->update([
            "nama_kegiatan" => $request->nama_kegiatan_edit,
            "jenis_kegiatan" => $request->jenis_kegiatan_edit,
            "tanggal_kegiatan" => $request->tanggal_kegiatan_edit,
            "minggu_kegiatan" => $request->minggu_kegiatan_edit,
            "detail_kegiatan" => $request->detail_kegiatan_edit
        ]);
        return redirect('/admin/kegiatan')->with('success', 'Kegiatan Berhasil diedit !');
    }

    //-------------------------------------------Mentor-------------------------------------------

    // Mentor Function 
    public function mentor()
    {
        $data_mentor = \App\Models\Mentor::all();
        $totalMentor = \App\Models\Mentor::count();
        return view('admin.mentor', ['data_mentor' => $data_mentor], ['totalMentor' => $totalMentor]);
    }

    // Get Mentor By ID
    public function mentorById($id)
    {
        $data_mentor = Mentor::find($id);
        return view('admin.mentor', ['data_mentor' => $data_mentor]);
    }

    // Add Mentor
    public function addMentor(Request $request)
    {

        $user = User::create([
            "role" => "mentor",
            "name" => $request->nama_mentor,
            "email" => $request->email_mentor,
            "password" => Hash::make($request->nama_mentor),
        ]);

        $productId = DB::getPdo()->lastInsertId();

        $mentor = Mentor::create([
            "nama_mentor" => $request->nama_mentor,
            "email_mentor" => $request->email_mentor,
            "alamat_mentor" => $request->alamat_mentor,
            "notelp_mentor" => $request->notelp_mentor,
            "status_mentor" => $request->status_mentor,
            "user_id" => $productId
        ]);

        return redirect('/admin/mentor')->with('success', 'Mentor Berhasil ditambahkan !');
    }

    // Delete Mentor
    public function delMentor($id_mentor)
    {
        $data_mentor = Mentor::find($id_mentor);
        $data_mentor->delete($data_mentor);
        return redirect('/admin/mentor')->with('success', 'Mentor Berhasil dihapus !');
    }

    // Import Mentor
    public function impMentor(Request $request)
    {
        Excel::import(new MentorImport,$request->file('data_mentor'));
        return redirect('/admin/mentor')->with('success', 'Mentor Berhasil di Import !');
    }

    // Detail Mentor
    public function detailMentor($id_mentor){
        $data_mentor = Mentor::find($id_mentor);
        return view('admin.mentor.detailMentor',compact(['data_mentor']));
    }

    // Update Mentor
    public function updMentor(Request $request,$id_mentor){
        $data_mentor = \App\Models\Mentor::find($id_mentor);
        $data_mentor->update($request->all());
        // dd($data_mentor);
        return redirect('/admin/mentor')->with('success', 'Mentor Berhasil di Update !');;
    }
    // Export Mentor
    public function exportMentorExcel()
    {
        return Excel::download(new MentorExport, 'Mentor.xlsx');
    }
    // Export PDF
    public function exportMentor()
    {
        // Masih Gabisa :v hehe
    }
    // Mentee Function
    public function mentee()
    {
        $data_mentee = Mentee::all();
        return view('admin.mentee', ['data_mentee' => $data_mentee]);
    }

    //-------------------------------------------Users-------------------------------------------

    // Users Function
    public function user()
    {
        return view('admin.user');
    }

    // Data Function

    // Get Data
    public function data()
    {
        $data_jurusan = Jurusan::all();
        $data_prodi = Prodi::all();
        return view('admin.data', ['data_jurusan' => $data_jurusan], ['data_prodi' => $data_prodi]);
    }
    // Add Data

    //-------------------------------------------Jurusan-------------------------------------------

    // Add Jurusan
    public function addJurusan(Request $request)
    {
        Jurusan::create($request->all());
        return redirect('/admin/data')->with('success', 'Data Jurusan Berhasil ditambahkan !');
    }
    // Add Prodi
    public function addProdi(Request $request)
    {
        Prodi::create($request->all());
        return redirect('/admin/data')->with('success', 'Data Prodi Berhasil ditambahkan !');
    }
    // Delete Data
    
        // Delete Jurusan

        // Delete Prodi

    // Materi Function

        // Get Function
        public function materi()
        {   
            $data_materi = \App\Models\Materi::all();
            $data_kegiatan = \App\Models\Kegiatan::all();
            $totalMateri = \App\Models\Materi::count();
            return view('admin.materi', ['data_materi' => $data_materi, 'data_kegiatan' => $data_kegiatan],['totalMateri' => $totalMateri]);
        }
        // Add Materi
        public function addMateri(Request $request)
        {
            $materi = \App\Models\Materi::create($request->all());
            return redirect('/admin/materi')->with('success', 'Materi Berhasil ditambahkan !');
        }
        // Delete Materi
        public function delMateri($id_materi)
        {
            $data_materi = \App\Models\Materi::find($id_materi);
            $data_materi->delete($data_materi);
            return redirect('/admin/materi')->with('success', 'Materi Berhasil dihapus !');
        }

    //-------------------------------------------Kelompok-------------------------------------------

    // Kelompok Function
    // Get Kelompok
    public function kelompok()
    {
        $data_kelompok = Kelompok::all();
        return view('admin.kelompok', ['data_kelompok' => $data_kelompok]);
    }
    // Detail Kelompok
    public function detailKelompok(){
        return view('admin.kelompok.detailKelompok');
    }

    //-------------------------------------------Keluhan-------------------------------------------

    // Keluhan Function
    public function keluhan()
    {
        return view('admin.keluhan');
    }
    
    //-------------------------------------------Pertemuan-------------------------------------------

    // Pertemuan Function
        // Get Pertemuan
        public function pertemuan(Request $request)
        {
            // Get By Mentor
            if($request->has('cari')){
                $data_pertemuan = Pertemuan::where('mentor_pertemuan','LIKE','%'. $request->cari.'%')->get();
                $total = Pertemuan::count();
            }else{
                $data_pertemuan = Pertemuan::all();
                $total = Pertemuan::count();
            }
            return view('admin.pertemuan',compact(['data_pertemuan','total']));
        }
        // Add Pertemuan
        public function addPertemuan(Request $request)
        {
            $pertemuan = Pertemuan::create($request->all());
            return redirect('/admin/pertemuan')->with('success', 'Pertemuan Berhasil Ditambahkan !');
        }
        // Del Pertemuan
        public function delPertemuan($id_pertemuan)
        {
            $data_pertemuan = Pertemuan::find($id_pertemuan);
            $data_pertemuan->delete($data_pertemuan);
            return redirect('/admin/pertemuan')->with('success', 'Pertemuan Berhasil dihapus !');
        }        
        // Search Pertemuan
        public function cariPertemuan($id_pertemuan)
        {
            $data_pertemuan = Pertemuan::find($id_pertemuan);
            return view('admin.mentor',compact(['data_pertemuan']));
        }
        // Detail Pertemuan
        public function detPertemuan($id_pertemuan){
        $data_pertemuan = Pertemuan::find($id_pertemuan);
        return view('admin.pertemuan.detailPertemuan', compact(['data_pertemuan']));
        }

    //-------------------------------------------Pengumuman-------------------------------------------

    //Function Pengumuman
    public function pengumuman()
    {
        $data_pengumuman = Pengumuman::all();
        return view('admin.pengumuman', ['data_pengumuman' => $data_pengumuman]);
    }

    // Add Pengumuman
    public function addPengumuman(Request $request)
    {
        $pengumuman = Pengumuman::create([
            "judul_pengumuman" => $request->judul_pengumuman,
            "tagline_pengumuman" => $request->tagline_pengumuman,
            "status_pengumuman" => $request->status_pengumuman,
            "detail_pengumuman" => $request->detail_pengumuman
        ]);
        return redirect('/admin/pengumuman')->with('success', 'Pengumuman Berhasil ditambahkan !');
    }
    // Delete Pengumuman
    public function delPengumuman($id_pengumuman)
    {
        $data_pengumuman = Pengumuman::find($id_pengumuman);
        $data_pengumuman->delete($data_pengumuman);
        return redirect('/admin/pengumuman')->with('success', 'Pengumuman Berhasil dihapus !');
    }
}
