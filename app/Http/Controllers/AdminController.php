<?php

namespace App\Http\Controllers;

use App\Exports\JurusanExport;
use App\Exports\MentorExport;
use App\Imports\MentorImport;
use App\Models\Absensi;
use App\Models\Angkatan;
use App\Models\Tugas;
use App\Models\CetakBukti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


use App\Models\Kegiatan;
use App\Models\Kelompok;
use App\Models\Mentee;
use App\Models\Mentor;
use App\Models\Materi;
use App\Models\Jurusan;
use App\Models\Pertemuan;
use App\Models\Prodi;
use App\Models\Kelas;
use App\Models\Keluhan;
use App\Models\PengumpulanTugas;
use App\Models\User;
use App\Models\Pengumuman;
use Barryvdh\DomPDF\Facade as PDF;
use Dompdf\Dompdf;
use GrahamCampbell\ResultType\Success;
use Svg\Tag\Rect;

class AdminController extends Controller
{
    // Dashboard Function
    public function index()
    {
        $totalMentee = Mentee::count();
        $totalMentor = Mentor::count();
        $data_kegiatan = Kegiatan::all();
        $data_pengumuman = Pengumuman::all();
        $totalKegiatan = Kegiatan::count();
        $totalMateri = Materi::count();
        $totalJurusan = Jurusan::count();
        $totalProdi = Prodi::count();
        $totalKelas = Kelas::count();
        return view('admin.index',compact([
            'totalMentee',
            'data_kegiatan',
            'data_pengumuman',
            'totalMentor',
            'totalKegiatan',
            'totalMateri',
            'totalJurusan',
            'totalProdi',
            'totalKelas']));
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
        $kegiatan->update($request->all());
        return redirect('/admin/kegiatan')->with('success', 'Kegiatan Berhasil diedit !');
    }

    //-------------------------------------------Mentor-------------------------------------------

    // Mentor Function
    public function mentor()
    {
        $data_mentor = Mentor::all();
        $totalMentor = Mentor::count();
        $total_kelompok = Kelompok::count();
        return view('admin.mentor', compact(['data_mentor', 'totalMentor', 'total_kelompok']));
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
            "role" => "Mentor",
            "name" => $request->nama_mentor,
            "email" => $request->email_mentor,
            "password" => Hash::make('mentor123'),
        ]);

        $userID = DB::getPdo()->lastInsertId();

        $mentor = Mentor::create([
            "user_id" => $userID,
            "nama_mentor" => $request->nama_mentor,
            "email_mentor" => $request->email_mentor,
            "alamat_mentor" => $request->alamat_mentor,
            "notelp_mentor" => $request->notelp_mentor,
            "status_mentor" => $request->status_mentor,
            "slug" => Str::slug($userID.'-'.$request->nama_mentor, '-')
        ]);

        return redirect('/admin/mentor')->with('success', 'Mentor Berhasil ditambahkan !');
    }

    // Delete Mentor
    public function delMentor($slug)
    {
        $data_mentor = Mentor::where('slug', $slug)->get()->first();
        $dataUser = User::where('id', $data_mentor->user_id)->get()->first();
        $data_kelompok = Kelompok::where('mentor_id', $data_mentor->id)->get()->first();
        $data_pertemuan = Pertemuan::where('mentor_id', $data_mentor->id)->get()->first();

        if($data_kelompok != null && $data_pertemuan != null){
            $dataUser->delete($dataUser);
            return redirect('/admin/mentor')->with('success', 'Mentor Berhasil dihapus !');
        }else{
            return redirect('/admin/mentor')->with('warning', 'Mentor Gagal dihapus, karena masih ada relasi !');
        }
    }

    // Import Mentor
    public function impMentor(Request $request)
    {
        Excel::import(new MentorImport,$request->file('data_mentor'));
        return redirect('/admin/mentor')->with('success', 'Mentor Berhasil di Import !');
    }

    // Detail Mentor
    public function detailMentor($slug){
        $data_mentor = Mentor::where('slug', $slug)->get()->first();
        return view('admin.mentor.detailMentor',compact(['data_mentor']));
    }
    // Update Mentor
    public function updMentor(Request $request,$id_mentor){
        $data_mentor = Mentor::find($id_mentor);
        $data_mentor->update($request->all());
        return redirect('/admin/mentor')->with('success', 'Mentor Berhasil di Update !');;
    }
    // Export Mentor Excel
    public function exportMentorExcel()
    {
        return Excel::download(new MentorExport, 'Mentor.xlsx');
    }
    // Export Mentor PDF
    public function exportMentorPDF()
    {
        // Masih Gabisa :v hehe
        $data_mentor = Mentor::all();
        return view('admin.exportPDF.mentorpdf',compact('data_mentor'));
    }

    //-------------------------------------------Mentee-------------------------------------------
    // Mentee Function
    public function mentee()
    {
        $data_mentee = Mentee::all();
        $totalMentee = Mentee::count();
        $total_kelompok = Kelompok::count();
        $total_kelas = Kelas::count();
        $data_angkatan = Angkatan::all();
        $data_jurusan = Jurusan::all();
        $data_kelompok = Kelompok::all();
        return view('admin.mentee', compact([
            'data_mentee', 
            'data_jurusan', 
            'data_kelompok',
            'data_angkatan',
            'totalMentee', 
            'total_kelompok', 
            'total_kelas'
            ]));
    }
    // Detail Mentee
    public function detailMentee($slug){
        $data_mentee = Mentee::where('slug', $slug)->get()->first();
        $data_angkatan = Angkatan::all();
        $data_jurusan = Jurusan::all();
        $data_kelompok = Kelompok::all();
        return view('admin.mentee.detail',compact(['data_mentee', 'data_jurusan', 'data_kelompok','data_angkatan']));
    }
    //Add Mentee
    public function addMentee(Request $request)
    {
        $user = User::create([
            "role" => "Mentee",
            "name" => $request->nama_mentee,
            "email" => $request->nim_mentee."@student.polinema.ac.id",
            "password" => Hash::make($request->nim_mentee),
        ]);

        $userID = DB::getPdo()->lastInsertId();

        $mentee = Mentee::create([
            "user_id" => $userID,
            "nim_mentee" => $request->nim_mentee,
            "nama_mentee" => $request->nama_mentee,
            "kelas_id" => $request->kelas_id,
            "kelompok_id" => $request->kelompok_id,
            "angkatan_id" => $request->angkatan_id,
            "status_mentee" => "tidak lulus",
            "slug" => Str::slug($userID.'-'.$request->nama_mentee, '-')
        ]);

        return redirect('/admin/mentee')->with('success', 'Mentee Berhasil ditambahkan !');
    }

    public function getProdiByIdJurusan($id){
        $prodi = Prodi::where('jurusan_id', $id)->get();
        return $prodi;
    }

    public function getKelasByIdProdi($id){
        $kelas = Kelas::where('prodi_id', $id)->get();
        return $kelas;
    }

    // Get Mentee By ID
    public function menteeById($id)
    {
        $data_mentor = Mentor::find($id);
        return view('admin.mentor', ['data_mentor' => $data_mentor]);
    }

    // Delete Mentee
    public function delMentee($slug)
    {
        $data_mentee = Mentee::where('slug', $slug)->get()->first();
        $dataUser = User::where('id', $data_mentee->user_id)->get()->first();

            $dataUser->delete($dataUser);
            return redirect('/admin/mentee')->with('success', 'Mentee Berhasil dihapus !');
    }

    // Import Mentee
    public function impMentee(Request $request)
    {
        Excel::import(new MentorImport,$request->file('data_mentor'));
        return redirect('/admin/mentor')->with('success', 'Mentor Berhasil di Import !');
    }

    // Update Mentee
    public function updMentee(Request $request,$id_mentee){
        $data_mentee = Mentee::find($id_mentee);
        $data_mentee->update($request->all());
        return redirect('/admin/mentor')->with('success', 'Mentor Berhasil di Update !');;
    }
    // Export Mentee
    public function exportMenteeExcel()
    {
        return Excel::download(new MentorExport, 'Mentor.xlsx');
    }
    // Export PDF
    public function exportMenteePDF()
    {
        $data_mentee = Mentee::all();
        return view('admin.exportPDF.menteepdf', compact('data_mentee'));
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
        $totalJurusan = Jurusan::count();
        $totalProdi = Prodi::count();
        $totalKelas = Kelas::count();
        $data_jurusan = Jurusan::all();
        $data_prodi = Prodi::all();
        $data_kelas = Kelas::with('prodi', 'prodi.jurusan')->get();
        return view('admin.data', compact(['data_jurusan', 'data_prodi', 'data_kelas','totalProdi','totalJurusan', 'totalKelas']));
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
    // Add Kelas
    public function addKelas(Request $request)
    {
        Kelas::create($request->all());
        return redirect('/admin/data')->with('success', 'Data Kelas Berhasil ditambahkan !');
    }
    // Delete Data

        // Delete Jurusan

        // Delete Prodi

    //-------------------------------------------Materi-------------------------------------------

    // Materi Function

        // Get Function
        public function materi()
        {
            $data_materi = Materi::all();
            $data_kegiatan = Kegiatan::all('minggu_kegiatan');
            $totalMateri = Materi::count();
            return view('admin.materi', compact(['data_materi', 'data_kegiatan','totalMateri']));
        }
        // Add Materi
        public function addMateri(Request $request)
        {
            // $materi = Materi::create($request->all());

            // Convert link materi untuk ditampilkan di embed

            // Dari input link youtube, dipecah berdasarkan /
            //explode itu string ke array
            $last = explode("/",$request->link_materi);

            //setelah jadi bagian2, ambil bagian yang terakhir. Setelah itu watch?v= nya direplace dengan embed/
            //0 dan 8 panjang dari watch?v=
            $convertedLast = substr_replace($last[3],"embed/",0,8);

            $embedLink = "https://youtube.com/".$convertedLast;
            $materi = Materi::create([
                "nama_materi" => $request->nama_materi,
                "link_materi" => $request->link_materi,
                "minggu_materi" => $request->minggu_materi,
                "link_materi_embed" => $embedLink,
                "detail_materi" => $request->detail_materi, 
                "slug" => Str::slug($request->nama_materi, '-')
            ]);
            // $materi = Materi::create($request->all());
            return redirect('/admin/materi')->with('success', 'Materi Berhasil ditambahkan !');
        }
        // Delete Materi
        public function delMateri($slug)
        {
            $data_materi = Materi::where('slug', $slug)->get()->first();;
            $data_materi->delete($data_materi);
            return redirect('/admin/materi')->with('success', 'Materi Berhasil dihapus !');
        }
        // Get By Id Materi
        public function getByIdMateri(Request $request){
            if($request->ajax()){
                $data = Materi::findOrFail($request->id_materi);
                return response()->json(['options'=>$data]);
            }
        }
        // Edit Materi
        public function editMateri(Request $request)
        {
            $id = $request->id_materi_edit;
            $materi = Materi::findOrFail($id);
            $last = explode("/",$request->link_materi_edit);

            //setelah jadi bagian2, ambil bagian yang terakhir. Setelah itu watch?v= nya direplace dengan embed/
            //0 dan 8 panjang dari watch?v=
            $convertedLast = substr_replace($last[3],"embed/",0,8);

            $embedLink = "https://youtube.com/".$convertedLast;
            $materi->update([
                "nama_materi" => $request->nama_materi_edit,
                "link_materi" => $request->link_materi_edit,
                "minggu_materi" => $request->minggu_materi_edit,
                "link_materi_embed" => $embedLink,
                "detail_materi" => $request->detail_materi_edit
            ]);
            // dd($materi);
            return redirect('/admin/materi')->with('success', 'Materi Berhasil diedit !');
        }

    //-------------------------------------------Tugas-------------------------------------------

    // Tugas Function

    // Get Function
    public function tugas()
    {
        $data_tugas = Tugas::with('pertemuan')->get();
        $data_pertemuan = Pertemuan::all();
        $total_tugas = Tugas::count();
        return view('admin.tugas', compact(['data_tugas', 'data_pertemuan','total_tugas']));
    }
    // Add Materi
    public function addTugas(Request $request)
    {
        $tugas = Tugas::create([
            "nama_tugas" => $request->nama_tugas,
            "detail_tugas" => $request->detail_tugas,
            "pertemuan_id" => $request->pertemuan_id,
            "status_tugas" => $request->status_tugas
        ]);
        return redirect('/admin/tugas')->with('success', 'Tugas Berhasil ditambahkan !');
    }
    // Delete Tugas
    public function delTugas($id_tugas)
    {
        $data_tugas = Tugas::find($id_tugas);
        if ($data_tugas) {
            Alert::error('Gagal !','Tugas Gagal dihapus');
            return redirect()->back();
        } else {
            $data_tugas->delete($data_tugas);
            return redirect('/admin/tugas')->with('success', 'Tugas Berhasil dihapus !');
        }
    }
    // Get By Id Tugas
    public function getByIdTugas(Request $request){
        if($request->ajax()){
            $data = Materi::findOrFail($request->id_materi);
            return response()->json(['options'=>$data]);
        }
    }
    // Edit Tugas
    public function editTugas(Request $request)
    {
        $id = $request->id_tugas_edit;
        $tugas = Tugas::findOrFail($id);

        $tugas->update([
            "nama_tugas" => $request->nama_tugas_edit,
            "detail_tugas" => $request->detail_tugas_edit,
            "pertemuan_id" => $request->pertemuan_id_edit,
        ]);
        return redirect('/admin/tugas')->with('success', 'Tugas Berhasil diedit !');
    }
    // Closed Tugas 
    public function closedTugas($id_tugas){
        $tugas = Tugas::find($id_tugas);

        $tugas->update([
            "status_tugas" => "Closed"
        ]);
        Alert::success('Berhasil !','Tugas Berhasil ditutup');
        return redirect('/admin/tugas/');
    }
    // Open Tugas 
    public function openTugas($id_tugas){
        $tugas = Tugas::find($id_tugas);

        $tugas->update([
            "status_tugas" => "Open"
        ]);
        Alert::success('Berhasil !','Tugas Berhasil dibuka');
        return redirect('/admin/tugas/');

    }

    //-------------------------------------------Kelompok-------------------------------------------

    // Get Kelompok
    public function kelompok(Request $request)
    {
        if ($request->has('cari')) {
            $data_kelompok = Kelompok::where('nama_kelompok', 'LIKE', '%' . $request->cari . '%')->get();
            $data_mentor = Mentor::all();
            $total_kelompok = Kelompok::count();
            return view('admin.kelompok', compact('data_kelompok', 'data_mentor', 'total_kelompok'));
        } else {
            $data_mentor = Mentor::all();
            $data_kelompok = Kelompok::all();
            $total_kelompok = Kelompok::count();
            return view('admin.kelompok', compact('data_kelompok', 'data_mentor', 'total_kelompok'));
        }

    }
    // Detail Kelompok
    public function detailKelompok($id_kelompok){
        $data_kelompok = Kelompok::find($id_kelompok);
        $data_mentee = Mentee::where([
            ['kelompok_id', '=', $id_kelompok]
            ])->get();       
        return view('admin.kelompok.detailKelompok',compact(['data_kelompok', 'data_mentee']));
    }
    // Add Kelompok
    public function addKelompok(Request $request){

        $kelompok = Kelompok::where([
            ['mentor_id', '=', $request->mentor_id]
        ])->first();
        
        if ($kelompok) {
            return redirect('/admin/kelompok')->with('warning','Kelompok Sudah Ada !');
        }else{
            $id_kelompok = DB::getPdo()->lastInsertId();
            $addKelompok = Kelompok::create([
                "id_kelompok" => $id_kelompok,
                "nama_kelompok" => $request->nama_kelompok,
                "mentor_id" => $request->mentor_id,
            ]);
            Alert::success('Yeay','Kelompok Berhasil Ditambahkan !');
            return redirect('/admin/kelompok');
        }
    }
    // Delete Kelompok
    public function delKelompok($id_kelompok){
        $data_kelompok = Kelompok::find($id_kelompok);

        $cek_mentee = Mentee::where([
            "kelompok_id" => $id_kelompok
        ]);
        if ($cek_mentee) {
            Alert::error('Kelompok Gagal dihapus', 'kosongkan data Mentee terlebih dahulu');
            return redirect()->back();
        } else {
            $data_kelompok->delete($data_kelompok);
        }
        Alert::success('Yeay', 'Kelompok Berhasil dihapus !');
        return redirect()->back();
    }
    // Delete Mentee Kelompok
    public function delMentKelompok(Request $request,$id_mentee){
        $data_mentee = Mentee::find($id_mentee);
        $data_mentee->update([
            "kelompok_id" => null
        ]);
        return redirect()->back()->with('success','Mentee berhasil dihapus');
    }
    // Add Mentee Kelompok
    public function addMenteeKel(Request $request,$id_mentee){
        $data_mentee = Mentee::find($id_mentee);
        $data_mentee->update([
            "kelompok_id" => $request->kelompok_id
        ]);
        // dd($data_mentee);
        Alert::success('Yeay', 'Kelompok Berhasil ditambahkan !');
        return redirect()->back();    
    }
    // Add Mentee Kelompok View
    public function addMenKelompok($id_kelompok){
        $data_kelompok = Kelompok::find($id_kelompok);
        $data_mentee = Mentee::where([
            ['kelompok_id', '=', null]
        ])->get();
        // dd($data_mentee);
        return view('admin.kelompok.tambahMentee', compact(['data_kelompok', 'data_mentee']));
    }
    
    //-------------------------------------------Keluhan-------------------------------------------

    // Get Function
    public function keluhan()
    {
        $data_keluhan = Keluhan::orderBy('created_at','desc')->get();
        // dd($data_keluhan);
        return view('admin.keluhan.index',compact('data_keluhan'));
    }
    // Detail Keluhan
    public function detailKeluhan($id_keluhan)
    {
        $data_keluhan = Keluhan::find($id_keluhan);
        return view('admin.keluhan.detail', compact('data_keluhan'));
    }
    // Jawab Keluhan
    public function jawabKeluhan(Request $request, $id_keluhan)
    {
        $data_keluhan = Keluhan::find($id_keluhan);
        $data_keluhan->update([
            "jawab_keluhan" => $request->jawab_keluhan,
            "status_keluhan" => "Selesai"
        ]);
        // dd($data_keluhan);
        Alert::success('Yeay','Keluhan berhasil dijawab !');
        return redirect()->back();
    }

    //-------------------------------------------Pertemuan-------------------------------------------

    // Pertemuan Function
        // Get Pertemuan
        public function pertemuan(Request $request)
        {
            // Get By Mentor
            if($request->has('cari')){
                $data_pertemuan = Pertemuan::where('nama_pertemuan','LIKE','%'. $request->cari.'%')->get();
                $total = Pertemuan::count();
                $totalMentee = Mentee::count();
                $totalKelompok = Kelompok::count();
            }else{
                $data_pertemuan = Pertemuan::orderBy('created_at','desc')->get();
                $total = Pertemuan::count();
                $totalMentee = Mentee::count();
                $totalKelompok = Kelompok::count();
            }
            return view('admin.pertemuan',compact(['data_pertemuan','total','totalMentee', 'totalKelompok']));
        }
        // Add Pertemuan
        public function addPertemuan(Request $request)
        {
            $pertemuan = Pertemuan::create($request->all());
            Alert::success('Yeay Berhasil !','Pertemuan Berhasil Ditambahkan !');
            return redirect('/admin/pertemuan');
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
            $data_pertemuan = Pertemuan::find   ($id_pertemuan);
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
        $pengumuman = Pengumuman::create($request->all());
        return redirect('/admin/pengumuman')->with('success', 'Pengumuman Berhasil ditambahkan !');
    }
    // Delete Pengumuman
    public function delPengumuman($id_pengumuman)
    {
        $data_pengumuman = Pengumuman::find($id_pengumuman);
        $data_pengumuman->delete($data_pengumuman);
        return redirect('/admin/pengumuman')->with('success', 'Pengumuman Berhasil dihapus !');
    }
    // Detail Pengumuman
    public function detPengumuman($id_pengumuman)
    {
        $data_pengumuman = Pengumuman::find($id_pengumuman);
        return view('admin.pengumuman.detailPengumuman', compact(['data_pengumuman']));
    }
    // Edit Pengumuman
    public function edtPengumuman(Request $request,$id_pengumuman){
        $data_pengumuman = Pengumuman::find($id_pengumuman);
        $data_pengumuman->update($request->all());
        return redirect('/admin/pengumuman')->with('success', 'Pengumuman Berhasil di Update !');
    }
    //-------------------------------------------Cetak-------------------------------------------
    // Get Bukti Cetak 
    public function cetak(){
        $data_cetak = CetakBukti::all();
        // dd($data_cetak);
        return view('admin.cetakBukti.index',compact('data_cetak'));
    }
    // Detail Cetak
    public function detailCetak($id_cetak){
        $data_cetak = CetakBukti::find($id_cetak);
        return view('admin.cetakBukti.detail',compact('data_cetak'));
    }
    public function accept(Request $request,$id_cetak){
        $data_cetak = CetakBukti::find($id_cetak);
        $data_cetak->update([
            "status_cetak" => "Accept"
        ]);
        return redirect()->back()->with('success','Bukti telah disetujui');
    }
    //-------------------------------------Pengumpulan Tugas -------------------------------------
    // Get Pengumpulan
    public function pengumpulan(){

        $pengumpulan_tugas = PengumpulanTugas::all();
        $total_tugas = PengumpulanTugas::count();
        return view('admin.pengumpulan.index',compact('pengumpulan_tugas','total_tugas'));
    }
    // Download Tugas
    public function downloadTugas($file){
       return response()->download('file_tugas/' .$file);
    }    
    // Accept Tugas
    public function accTugas($id_pengumpulan_tugas){
        $data_pengumpulan = PengumpulanTugas::find($id_pengumpulan_tugas);
        $data_pengumpulan->update([
            "status_tugas" => "Diterima"
        ]);
        Alert::success('Berhasil !','Tugas telah diterima');
        return redirect()->back();
    }
    // Decline Tugas
    public function decTugas($id_pengumpulan_tugas){
        $data_pengumpulan = PengumpulanTugas::find($id_pengumpulan_tugas);
        $data_pengumpulan->update([
            "status_tugas" => "Ditolak"
        ]);
        Alert::warning('Yaah:(', 'Tugas telah ditolak');
        return redirect()->back();
    }

    //-------------------------------------------Absensi-------------------------------------------
    public function absensi()
    {
        $total_mentee = Mentee::count();
        $total_pertemuan = Pertemuan::count();
        $data_pertemuan = Pertemuan::all();
        $total_absensi = Absensi::count();
        return view('admin.absensi.index', compact('total_absensi', 'data_pertemuan','total_mentee','total_pertemuan'));
    }
    public function detailAbsen($id_pertemuan){
        $data_pertemuan = Pertemuan::find($id_pertemuan);
        $absen = Absensi::where([
            "pertemuan_id" => $id_pertemuan
        ])->get();
        return view('admin.absensi.detail',compact('data_pertemuan','absen'));
    }
}
