<?php

namespace App\Http\Controllers;

use App\Exports\JurusanExport;
use App\Exports\MentorExport;
use App\Imports\MenteeImport;
use App\Imports\MentorImport;
use App\Imports\UserImport;
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
use App\Models\Panitia;
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
use Illuminate\Database\QueryException;
use Svg\Tag\Rect;

class AdminController extends Controller
{
    // Dashboard Function
    public function index()
    {
        $totalMentee = Mentee::count();
        $totalMentor = Mentor::count();
        $data_kegiatan = Kegiatan::paginate(5);
        $data_pengumuman = Pengumuman::all();
        $totalKegiatan = Kegiatan::count();
        $totalMateri = Materi::count();
        $totalJurusan = Jurusan::count();
        $totalProdi = Prodi::count();
        $totalKelas = Kelas::count();
        return view('admin.index', compact([
            'totalMentee',
            'data_kegiatan',
            'data_pengumuman',
            'totalMentor',
            'totalKegiatan',
            'totalMateri',
            'totalJurusan',
            'totalProdi',
            'totalKelas'
        ]));
    }

    //-------------------------------------------Kegiatan-------------------------------------------

    //Function Kegiatan
    public function kegiatan()
    {
        $data_kegiatan = Kegiatan::all();
        // dd($data_kegiatan);
        $totalKegiatan = Kegiatan::count();
        return view('admin.kegiatan', compact(['data_kegiatan', 'totalKegiatan']));
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
    public function getByIdKegiatan(Request $request)
    {
        if ($request->ajax()) {
            $data = Kegiatan::findOrFail($request->id_kegiatan);
            return response()->json(['options' => $data]);
        }
    }

    // Edit Kegiatan
    public function editKegiatan(Request $request)
    {
        $id = $request->id_kegiatan_edit;
        $kegiatan = Kegiatan::find($id);
        $kegiatan->update([
            'nama_kegiatan' => $request->nama_kegiatan_edit,
            'jenis_kegiatan' => $request->jenis_kegiatan_edit,
            'tanggal_kegiatan' => $request->tanggal_kegiatan_edit,
            'detail_kegiatan' => $request->detail_kegiatan_edit,
            'status_kegiatan' => $request->status_kegiatan_edit,
            'minggu_kegiatan' => $request->minggu_kegiatan_edit,
        ]);
        return redirect('/admin/kegiatan')->with('success', 'Kegiatan Berhasil diedit !');
    }

    // Open Kegiatan 
    public function openKegiatan($id_kegiatan)
    {
        $kegiatan = Kegiatan::find($id_kegiatan);

        $kegiatan->update([
            "status_kegiatan" => "Open"
        ]);
        Alert::success('Berhasil', 'Kegiatan Berhasil Dibuka');
        return redirect()->back();
    }

    // Close Kegiatan
    public function closeKegiatan($id_kegiatan)
    {
        $kegiatan = Kegiatan::find($id_kegiatan);

        $kegiatan->update([
            "status_kegiatan" => "Closed"
        ]);
        Alert::success('Berhasil', 'Kegiatan Berhasil Ditutup');
        return redirect()->back();
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
        $getPass = explode("@", $request->email_mentor);
        $generate_password = $getPass[0];

        $user = User::create([
            "role" => "Mentor",
            "name" => $request->nama_mentor,
            "email" => $request->email_mentor,
            "password" => Hash::make($generate_password),
        ]);

        $userID = DB::getPdo()->lastInsertId();

        $mentor = Mentor::create([
            "user_id" => $userID,
            "nama_mentor" => $request->nama_mentor,
            "email_mentor" => $request->email_mentor,
            "alamat_mentor" => $request->alamat_mentor,
            "notelp_mentor" => $request->notelp_mentor,
            "status_mentor" => $request->status_mentor,
            "slug" => Str::slug($userID . '-' . $request->nama_mentor, '-')
        ]);

        return redirect('/admin/mentor')->with('success', 'Mentor Berhasil ditambahkan !');
    }

    // Delete Mentor
    public function delMentor($slug)
    {
        $data_mentor = Mentor::where('slug', $slug)->get()->first();
        $dataUser = User::where('id', $data_mentor->user_id)->get()->first();
        $data_kelompok = Kelompok::where('mentor_id', $data_mentor->id_mentor)->get()->first();
        if ($data_kelompok == null ) {
            $dataUser->delete($dataUser);
            return redirect('/admin/mentor')->with('success', 'Mentor Berhasil dihapus !');
        } else {
            return redirect('/admin/mentor')->with('warning', 'Mentor Gagal dihapus, karena berelasi dengan Data Kelompok !');
        }
    
    }

    // Import Mentor
    public function impMentor(Request $request)
    {
        Excel::import(new MentorImport, $request->file('data_mentor'));
        return redirect('/admin/mentor')->with('success', 'Mentor Berhasil di Import !');
    }

    // Detail Mentor
    public function detailMentor($slug)
    {
        $data_mentor = Mentor::where('slug', $slug)->get()->first();
        return view('admin.mentor.detailMentor', compact(['data_mentor']));
    }
    // Update Mentor
    public function updMentor(Request $request, $id_mentor)
    {
        // $data_mentor = Mentor::find($id_mentor);
        // $data_mentor->update($request->all());

        $id = $request->id_mentor;
        $data_mentor = Mentor::find($id);
        $data_user = User::Find($data_mentor->user_id);
        // dd($panitia);
        $getPass = explode("@", $request->email_mentor);
        $generate_password = $getPass[0];

        // dd($request->email_mentor);

        $data_mentor->update([
            "nama_mentor" => $request->nama_mentor,
            "email_mentor" => $request->email_mentor,
            "notelp_mentor" => $request->notelp_mentor,
            "alamat_mentor" => $request->alamat_mentor,
            // "password" => $request->password_panitia_edit,
        ]);
        // dd($data_mentor);
        $data_user->update([
            "name" => $request->nama_mentor,
            "email" => $request->email_mentor,
            "password" => Hash::make($generate_password)
        ]);
        // dd($data_mentor);
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
        return view('admin.exportPDF.mentorpdf', compact('data_mentor'));
    }

    //-------------------------------------------Mentee-------------------------------------------

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
    public function detailMentee($slug)
    {
        $data_mentee = Mentee::where('slug', $slug)->get()->first();
        $data_angkatan = Angkatan::all();
        $data_jurusan = Jurusan::all();
        $data_kelompok = Kelompok::all();
        $tugas = PengumpulanTugas::where([
            "mentee_id" => $data_mentee->id_mentee,
            "status_tugas" => "Diterima"
        ])->count();
        $pertemuan = Absensi::where([
            "mentee_id" => $data_mentee->id_mentee
        ])->count();
        $status = $tugas + $pertemuan;
        return view('admin.mentee.detail', compact(['data_mentee', 'data_jurusan', 'data_kelompok', 'data_angkatan', 'tugas', 'pertemuan', 'status']));
    }
    //Add Mentee
    public function addMentee(Request $request)
    {
        $user = User::create([
            "role" => "Mentee",
            "name" => $request->nama_mentee,
            "email" => $request->nim_mentee . "@student.polinema.ac.id",
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
            "slug" => Str::slug($userID . '-' . $request->nama_mentee, '-')
        ]);

        return redirect('/admin/mentee')->with('success', 'Mentee Berhasil ditambahkan !');
    }
    
    public function getProdiByIdJurusan($id)
    {
        $prodi = Prodi::where('jurusan_id', $id)->get();
        return $prodi;
    }

    public function getKelasByIdProdi($id)
    {
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
        
        try {
            $dataUser->delete($dataUser);
            return redirect('/admin/mentee')->with('success', 'Mentee Berhasil dihapus !');
        }catch(QueryException $e){
            return redirect('/admin/mentee')->with('warning', 'Data Mentee Gagal dihapus, karena berelasi dengan Data Lain !');
        }
    }

    // Import Mentee
    public function impMentee(Request $request)
    {
        // dd($request->all());
        Excel::import(new UserImport, $request->file('data_mentee'));

        Excel::import(new MenteeImport, $request->file('data_mentee'));
        
        return redirect('/admin/mentee')->with('success', 'Mentee Berhasil di Import !');
    }

    // Update Mentee
    public function updMentee(Request $request, $id_mentee)
    {
        $data_mentee = Mentee::find($id_mentee);
        $data_mentee->update($request->all());
        return redirect('/admin/mentee')->with('success', 'Mentee Berhasil di Update !');;
    }
    // Export Mentee
    public function exportMenteeExcel()
    {
        return Excel::download(new MentorExport, 'Mentee.xlsx');
    }
    // Export PDF
    public function exportMenteePDF()
    {
        $data_mentee = Mentee::all();
        return view('admin.exportPDF.menteepdf', compact('data_mentee'));
    }

    //-------------------------------------------Users-------------------------------------------

    //Function User
    public function user()
    {
        // $data_user_panitia = User::where('role', 'Panitia')->get();
        $data_user_panitia = Panitia::all();
        $data_user_mentor = Mentor::all();
        $data_user = User::all();
        $totalUserPanitia = Panitia::count();
        $totalUserMentor = Mentor::count();
        // dd($data_user_panitia);
        return view('admin.user', compact(['totalUserPanitia', 'data_user_panitia', 'totalUserMentor', 'data_user_mentor', 'data_user']));
    }

    // Add User Panitia
    public function addUserPanitia(Request $request)
    {
        // dd($request);
        $getPass = explode("@", $request->email_panitia);
        $generate_password = $getPass[0];

        $user = User::create([
            "role" => "Panitia",
            "name" => $request->nama_panitia,
            "email" => $request->email_panitia,
            "password" => Hash::make($generate_password),
        ]);

        $userID = DB::getPdo()->lastInsertId();

        $panitia = Panitia::create([
            "user_id" => $userID,
            "nama_panitia" => $request->nama_panitia,
            "status_panitia" => $request->status_panitia
        ]);
        // dd($panitia);
        return redirect('/admin/user')->with('success', 'Panitia Berhasil ditambahkan !');
    }
    // Delete User Panitia
    public function delUserPanitia($id_panitia)
    {
        // dd($id_panitia);
        $data_user_panitia = Panitia::where('id_panitia', $id_panitia)->get()->first();
        $dataUserPanitia = User::where('id', $data_user_panitia->user_id)->get()->first();

        $data_user_panitia->delete($data_user_panitia);
        $dataUserPanitia->delete($dataUserPanitia);
        
        // dd($dataUserPanitia);
        return redirect('/admin/user')->with('success', 'Panitia Berhasil dihapus !');
    }

    // Delete User Mentor
    public function delUserMentor($slug)
    {
        // dd($id_panitia);
        $data_mentor = Mentor::where('slug', $slug)->get()->first();
        $dataUser = User::where('id', $data_mentor->user_id)->get()->first();
        $data_kelompok = Kelompok::where('mentor_id', $data_mentor->id_mentor)->get()->first();
        if ($data_kelompok == null ) {
            $dataUser->delete($dataUser);
            return redirect('/admin/user')->with('success', 'Mentor Berhasil dihapus !');
        } else {
            return redirect('/admin/user')->with('warning', 'Mentor Gagal dihapus, karena berelasi dengan Data Kelompok !');
        }
    }

    //Get By Id User Panitia
    public function getByIdUserPanitia(Request $request){
        // dd($request);
        if($request->ajax()){
            $data_panitia = Panitia::findOrFail($request->id_panitia);
            $data_user = User::findOrFail($data_panitia->user_id);
            // dd($data_panitia);
            // dd($data_user);
            return response()->json(['panitia'=>$data_panitia, 'user'=>$data_user]);
        }
    }

    //Edit User Panitia
    public function editUserPanitia(Request $request)
    {
        $id = $request->id_panitia_edit;
        $panitia = Panitia::find($id);
        $data_user = User::Find($panitia->user_id);
        // dd($panitia);
        $getPass = explode("@", $request->email_panitia_edit);
        $generate_password = $getPass[0];

        $panitia->update([
            "nama_panitia" => $request->nama_panitia_edit,
            "email" => $request->email_panitia_edit,
            "status_panitia" => $request->status_panitia_edit,
            // "password" => $request->password_panitia_edit,
        ]);

        $data_user->update([
            "name" => $request->nama_panitia_edit,
            "email" => $request->email_panitia_edit,
            "password" => Hash::make($generate_password)
        ]);

        // dd($panitia);
        $panitia->update($request->all());
        $data_user->update($request->all());
        return redirect('/admin/user')->with('success', 'Panitia Berhasil diedit !');
    }

    //Get By Id User Mentor
    public function getByIdUserMentor(Request $request){
        // dd($request);
        if($request->ajax()){
            $data_mentor = Mentor::findOrFail($request->id_mentor);
            $data_user = User::findOrFail($data_mentor->user_id);
            // dd($data_panitia);
            // dd($data_user);
            return response()->json(['mentor'=>$data_mentor, 'user'=>$data_user]);
        }
    }

    //Edit User Panitia
    public function editUserMentor(Request $request)
    {
        $id = $request->id_mentor_edit;
        $mentor = Mentor::find($id);
        $data_user = User::Find($mentor->user_id);
        // dd($panitia);
        $getPass = explode("@", $request->email_mentor_edit);
        $generate_password = $getPass[0];

        $mentor->update([
            "nama_mentor" => $request->nama_mentor_edit,
            "email_mentor" => $request->email_mentor_edit,
            "status_mentor" => $request->status_mentor_edit,
            // "password" => $request->password_panitia_edit,
        ]);

        $data_user->update([
            "name" => $request->nama_mentor_edit,
            "email" => $request->email_mentor_edit,
            "password" => Hash::make($generate_password)
        ]);

        // dd($panitia);
        $mentor->update($request->all());
        $data_user->update($request->all());
        return redirect('/admin/user')->with('success', 'Mentor Berhasil diedit !');
    }


    //-------------------------------------------Data-------------------------------------------

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
        return view('admin.data', compact(['data_jurusan', 'data_prodi', 'data_kelas', 'totalProdi', 'totalJurusan', 'totalKelas']));
    }

    //-------------------------------------------Jurusan

    // Add Jurusan
    public function addJurusan(Request $request)
    {
        Jurusan::create($request->all());
        return redirect('/admin/data')->with('success', 'Data Jurusan Berhasil ditambahkan !');
    }

    // Delete Jurusan
    public function delJurusan($id_jurusan)
    {
        $data_jurusan = Jurusan::find($id_jurusan);

        $data_prodi = Prodi::where('jurusan_id', $data_jurusan->id_jurusan)->get()->first();
        // dd($data_prodi);
        if ($data_prodi==null) {
            $data_jurusan->delete($data_jurusan);
            return redirect('/admin/data')->with('success', 'Data Jurusan Berhasil dihapus !');
            
        } else {
            return redirect('/admin/data')->with('warning', 'Data Jurusan Gagal dihapus, karena berelasi dengan Data Prodi !');
        }
        
    }

    // Edit Jurusan
    public function editJurusan(Request $request)
    {
        $id = $request->id_jurusan_edit;
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->update([
            "nama_jurusan" => $request->nama_jurusan_edit,
            "singkatan_jurusan" => $request->singkatan_jurusan_edit
        ]);
        // dd($jurusan);
        return redirect('/admin/data')->with('success', 'Jurusan Berhasil diedit !');
    }

    // Get By Id Jurusan
    public function getByIdJurusan(Request $request)
    {
        if ($request->ajax()) {
            $data = Jurusan::findOrFail($request->id_jurusan);
            return response()->json(['options' => $data]);
        }
    }

    //-------------------------------------------Prodi

    // Add Prodi
    public function addProdi(Request $request)
    {
        Prodi::create($request->all());
        return redirect('/admin/data')->with('success', 'Data Prodi Berhasil ditambahkan !');
    }

    // Delete Prodi
    public function delProdi($id_prodi)
    {
        $data_prodi = Prodi::find($id_prodi);

        $data_kelas = Kelas::where('prodi_id', $data_prodi->id_prodi)->get()->first();
        // dd($data_prodi);
        if ($data_kelas==null) {
            $data_prodi->delete($data_prodi);
            return redirect('/admin/data')->with('success', 'Data Prodi Berhasil dihapus !');
            
        } else {
            return redirect('/admin/data')->with('warning', 'Data Prodi Gagal dihapus, karena berelasi dengan Data Kelas !');
        }
    }

    // Edit Prodi
    public function editProdi(Request $request)
    {
        $id = $request->id_prodi_edit;
        $prodi = Prodi::findOrFail($id);
        $prodi->update([
            "nama_prodi" => $request->nama_prodi_edit,
            "singkatan_prodi" => $request->singkatan_prodi_edit,
            "jurusan_id" => $request->nama_jurusan_edit
        ]);
        return redirect('/admin/data')->with('success', 'Prodi Berhasil diedit !');
    }

    // Get By Id Prodi
    public function getByIdProdi(Request $request)
    {
        // dd($request);
        if ($request->ajax()) {
            $data_prodi = Prodi::findOrFail($request->id_prodi);
            $data_jurusan = Jurusan::findOrFail($data_prodi->jurusan_id);
            return response()->json(['prodi' => $data_prodi, 'jurusan' => $data_jurusan]);
        }
    }
    

    //-------------------------------------------Kelas

    // Add Kelas
    public function addKelas(Request $request)
    {
        Kelas::create($request->all());
        return redirect('/admin/data')->with('success', 'Data Kelas Berhasil ditambahkan !');
    }

    // Delete Kelas
    public function delKelas($id_kelas)
    {
        $data_kelas = Kelas::find($id_kelas);

        $data_mentee = Mentee::where('kelas_id', $data_kelas->id_kelas)->get()->first();
        // dd($data_prodi);
        if ($data_mentee==null) {
            $data_kelas->delete($data_kelas);
            return redirect('/admin/data')->with('success', 'Data Kelas Berhasil dihapus !');
            
        } else {
            return redirect('/admin/data')->with('warning', 'Data Kelas Gagal dihapus, karena berelasi dengan Data Mentee !');
        } 
    }

    // Edit Kelas
    public function editKelas(Request $request)
    {
        $id = $request->id_kelas_edit;
        $kelas = Kelas::findOrFail($id);
        
        $kelas->update([
            "prodi_id" => $request->nama_prodi_edit,
            "kelas" => $request->kelas_edit
        ]);

        return redirect('/admin/data')->with('success', 'Kelas Berhasil diedit !');
    }

    // Get By Id Kelas
    public function getByIdKelas(Request $request)
    {
        if ($request->ajax()) {
            $data_kelas = Kelas::findOrFail($request->id_kelas);
            $data_prodi = Prodi::findOrFail($data_kelas->prodi_id);
            return response()->json(['kelas' => $data_kelas, 'prodi' => $data_prodi]);
        }
    }

    //-------------------------------------------Materi-------------------------------------------

    // Materi Function

    // Get Function
    public function materi()
    {
        $data_materi = Materi::all();
        $data_user = User::where('role' ,'Panitia')
        ->orWhere('role' ,'Mentor')
        ->get();
        
        $data_kegiatan = Kegiatan::where('jenis_kegiatan' ,'=', 'Materi')
        ->orWhere('jenis_kegiatan', '=','Kegiatan Wajib')
        ->orWhere('jenis_kegiatan', '=','Pengganti')
        ->get();
        // $data_user_panitia = User::where('role', 'Panitia')->get();
        $totalMateri = Materi::count();
        return view('admin.materi', compact(['data_materi', 'data_user', 'data_kegiatan', 'totalMateri']));
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

    //-------------------------------------------Tugas-------------------------------------------

    // Get Function
    public function tugas()
    {
        $data_tugas = Tugas::all();
        $data_materi = Materi::all();
        $total_tugas = Tugas::count();
        return view('admin.tugas', compact(['data_tugas', 'data_materi', 'total_tugas']));
    }
    // Add Tugas
    public function addTugas(Request $request)
    {
        $cekTugas = Tugas::where([
            "materi_id" => $request->materi_id
        ])->first();

        if ($cekTugas) {
            Alert::error('Gagal Menambah Tugas', 'Tugas Telah Tersedia');
            return redirect()->back();
        } else {
            $tugas = Tugas::create([
                "nama_tugas" => $request->nama_tugas,
                "detail_tugas" => $request->detail_tugas,
                "materi_id" => $request->materi_id,
                "status_tugas" => $request->status_tugas
            ]);
            Alert::success('Yeay Berhasil !', 'Tugas Berhasil ditambahkan !');
            return redirect()->back();
        }
    }
    // Delete Tugas
    public function delTugas($id_tugas)
    {
        $data_tugas = Tugas::find($id_tugas);
        // Cek di Pengumpulan Tugas
        $pengumpulan_tugas = PengumpulanTugas::where([
            'tugas_id' => $id_tugas
        ])->first();

        if ($pengumpulan_tugas) {
            Alert::error('Gagal !', 'Tugas Gagal dihapus');
            return redirect()->back();
        } else {
            $data_tugas->delete($data_tugas);
            Alert::success('Yesy !', 'Tugas berhasil dihapus');
            return redirect('/admin/tugas');
        }
    }
    // Get By Id Tugas
    public function getByIdTugas(Request $request)
    {
        if ($request->ajax()) {
            $data_tugas = Tugas::findOrFail($request->id_tugas);
            $data_materi = Materi::findOrFail($data_tugas->materi_id);
            return response()->json(['tugas' => $data_tugas, 'materi' => $data_materi]);
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
            "materi_id" => $request->nama_materi_edit,
        ]);
        return redirect('/admin/tugas')->with('success', 'Tugas Berhasil diedit !');
    }
    
    // Closed Tugas 
    public function closedTugas($id_tugas)
    {
        $tugas = Tugas::find($id_tugas);

        $tugas->update([
            "status_tugas" => "Closed"
        ]);
        Alert::success('Berhasil !', 'Tugas Berhasil ditutup');
        return redirect('/admin/tugas/');
    }
    // Open Tugas 
    public function openTugas($id_tugas)
    {
        $tugas = Tugas::find($id_tugas);

        $tugas->update([
            "status_tugas" => "Open"
        ]);
        Alert::success('Berhasil !', 'Tugas Berhasil dibuka');
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
    public function detailKelompok($id_kelompok)
    {
        $data_kelompok = Kelompok::find($id_kelompok);
        $data_mentee = Mentee::where([
            ['kelompok_id', '=', $id_kelompok]
        ])->get();
        return view('admin.kelompok.detailKelompok', compact(['data_kelompok', 'data_mentee']));
    }
    // Add Kelompok
    public function addKelompok(Request $request)
    {

        $kelompok = Kelompok::where([
            ['mentor_id', '=', $request->mentor_id]
        ])->first();

        if ($kelompok) {
            return redirect('/admin/kelompok')->with('warning', 'Kelompok Sudah Ada !');
        } else {
            $id_kelompok = DB::getPdo()->lastInsertId();
            $addKelompok = Kelompok::create([
                "id_kelompok" => $id_kelompok,
                "nama_kelompok" => $request->nama_kelompok,
                "mentor_id" => $request->mentor_id,
                // "materi_id" => $request->materi_id,
            ]);
            Alert::success('Yeay', 'Kelompok Berhasil Ditambahkan !');
            return redirect('/admin/kelompok');
        }
    }
    // Delete Kelompok
    public function delKelompok($id_kelompok)
    {
        $data_kelompok = Kelompok::find($id_kelompok);

        $cek_mentee = Mentee::where([
            "kelompok_id" => $id_kelompok
        ])->first();
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
    public function delMentKelompok(Request $request, $id_mentee)
    {
        $data_mentee = Mentee::find($id_mentee);
        $data_mentee->update([
            "kelompok_id" => null
        ]);
        return redirect()->back()->with('success', 'Mentee berhasil dihapus');
    }
    // Add Mentee Kelompok
    public function addMenteeKel(Request $request, $id_mentee)
    {
        $data_mentee = Mentee::find($id_mentee);
        $data_mentee->update([
            "kelompok_id" => $request->kelompok_id
        ]);
        // dd($data_mentee);
        Alert::success('Yeay', 'Kelompok Berhasil ditambahkan !');
        return redirect()->back();
    }
    // Add Mentee Kelompok View
    public function addMenKelompok($id_kelompok)
    {
        $data_kelompok = Kelompok::find($id_kelompok);
        $data_mentee = Mentee::where([
            ['kelompok_id', '=', null]
        ])->get();
        // dd($data_mentee);
        return view('admin.kelompok.tambahMentee', compact(['data_kelompok', 'data_mentee']));
    }

    //-------------------------------------------1-------------------------------------------

    // Get Function
    public function keluhan()
    {
        $data_keluhan = Keluhan::orderBy('created_at', 'desc')->get();
        // dd($data_keluhan);
        return view('admin.keluhan.index', compact('data_keluhan'));
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
        Alert::success('Yeay', 'Keluhan berhasil dijawab !');
        return redirect()->back();
    }
    // Hapus Keluhan
    public function hapusKeluhan($id_keluhan){
        $data_keluhan = Keluhan::find($id_keluhan);
        $data_keluhan->delete($id_keluhan);
        Alert::success('Yeay', 'Keluhan berhasil dijawab !');
        return redirect()->back();
    }

    //-------------------------------------------Pertemuan-------------------------------------------

    // Get Pertemuan
    public function pertemuan(Request $request)
    {
        // Get By Mentor
        if ($request->has('cari')) {
            $data_kegiatan = Kegiatan::where([
                "jenis_kegiatan" => "Pertemuan"
            ])->get();
            $data_pertemuan = Pertemuan::where('nama_pertemuan', 'LIKE', '%' . $request->cari . '%')->get();
            $total = Pertemuan::count();
            $filter_pertemuan = Pertemuan::all();
            $totalMentee = Mentee::count();
            $data_mentor = Mentor::all();
            $totalKelompok = Kelompok::count();
            $data_kelompok = Kelompok::all();
            
        } else {
            $data_pertemuan = Pertemuan::orderBy('created_at', 'desc')->get();
            $data_kegiatan = Kegiatan::where([
                "jenis_kegiatan" => "Pertemuan"
            ])->get();
            $total = Pertemuan::count();
            $totalMentee = Mentee::count();
            $totalKelompok = Kelompok::count();
            $data_mentor = Mentor::all();
            $filter_pertemuan = Pertemuan::all();
            $data_kelompok = Kelompok::all();
        }
        return view('admin.pertemuan', compact(['data_pertemuan', 'data_kelompok', 'total', 'totalMentee', 'totalKelompok', 'data_kegiatan','data_mentor','filter_pertemuan']));
    }

    // Add Pertemuan
    public function addPertemuan(Request $request)
    {
        // Cek Pertemuan 
        $cek = Pertemuan::where([
            "kegiatan_id" => $request->kegiatan_id,
            "kelompok_id" => $request->mentor_id
        ])->first();
        if ($cek) {
            Alert::warning('Pertemuan Gagal dihapus !','Pertemuan Sudah Tersedia !');
        } else {
            $pertemuan = Pertemuan::create([
                "nama_pertemuan" => $request->nama_pertemuan,
                "link_pertemuan" => $request->link_pertemuan,
                "kegiatan_id" => $request->kegiatan_id,
                "kelompok_id" => $request->mentor_id,
                "detail_pertemuan" => $request->detail_pertemuan
            ]);
            // dd($pertemuan);
            Alert::success('Yeay Berhasil !', 'Pertemuan Berhasil Ditambahkan !');
        }
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
    public function cariPertemuan(Request $request)
    {
        $total = Pertemuan::count();
        $totalMentee = Mentee::count();
        $totalKelompok = Kelompok::count();
        $data_mentor = Mentor::all();
        $filter_pertemuan = Pertemuan::all();
        $data_kelompok = Kelompok::all();
        $data_pertemuan = Pertemuan::where([
            "kegiatan_id" => $request->minggu_kegiatan
        ])->get();
        $data_kegiatan = Kegiatan::where([
            "jenis_kegiatan" => "Pertemuan"
        ])->get();
        // dd($data_pertemuan);
        return view('admin.pertemuan', compact(['data_pertemuan', 'total', 'totalMentee', 'totalKelompok', 'data_kegiatan','data_mentor','filter_pertemuan','data_kelompok']));
    }
    // Detail Pertemuan
    public function detPertemuan($id_pertemuan)
    {
        $data_pertemuan = Pertemuan::find($id_pertemuan);
        $data_kelompok = Kelompok::all();
        $data_kegiatan = Kegiatan::where([
            "jenis_kegiatan" => "Pertemuan"
        ])->get();
        return view('admin.pertemuan.detailPertemuan', compact(['data_pertemuan', 'data_kelompok', 'data_kegiatan']));
    }

    // Get By Id Pertemuan
    public function getByIdPertemuan(Request $request)
    {
        // dd($request);
        if ($request->ajax()) {
            $data_pertemuan = Pertemuan::findOrFail($request->id_pertemuan);
            $data_kegiatan = Kegiatan::findOrFail($data_pertemuan->kegiatan_id);
            $data_kelompok = Kelompok::findOrFail($data_pertemuan->kelompok_id);
            return response()->json(['pertemuan' => $data_pertemuan, 'kegiatan' => $data_kegiatan, 'kelompok' => $data_kelompok]);
        }
    }

    // Edit Pertemuan
    public function editPertemuan(Request $request)
    {
        $id = $request->id_pertemuan_edit;
        $pertemuan = Pertemuan::findOrFail($id);
        // dd($pertemuan);
        $pertemuan->update([
            "nama_pertemuan" => $request->nama_pertemuan_edit,
            "link_pertemuan" => $request->link_pertemuan_edit,
            "detail_pertemuan" => $request->detail_pertemuan_edit,
            "kelompok_id" => $request->mentor_pertemuan_edit,
            "kegiatan_id" => $request->minggu_kegiatan_edit
        ]);
        return redirect('/admin/pertemuan')->with('success', 'Pertemuan Berhasil diedit !');
    }
    //Filter Pertemuan
    public function filterPertemuan(Request $request){

        $total = Pertemuan::count();
        $totalMentee = Mentee::count();
        $totalKelompok = Kelompok::count();
        $data_mentor = Mentor::all();
        $filter_pertemuan = Pertemuan::all();
        $data_kelompok = Kelompok::all();
        $data_pertemuan = Pertemuan::where([
            "kegiatan_id" => $request->minggu_kegiatan
        ])->get();
        $data_kegiatan = Kegiatan::where([
            "jenis_kegiatan" => "Pertemuan"
        ])->get();
        // dd($data_pertemuan);
        return view('admin.pertemuan', compact(['data_pertemuan', 'total', 'totalMentee', 'totalKelompok', 'data_kegiatan', 'data_mentor', 'filter_pertemuan', 'data_kelompok']));
    }
   

    //-------------------------------------------Pengumuman-------------------------------------------

    //Function Pengumuman
    public function pengumuman()
    {
        $data_pengumuman = Pengumuman::all();
        $total_pengumuman = Pengumuman::count();
        return view('admin.pengumuman', compact(['data_pengumuman', 'total_pengumuman']));
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
    public function editPengumuman(Request $request, $id_pengumuman)
    {
        $data_pengumuman = Pengumuman::find($id_pengumuman);
        $data_pengumuman->update($request->all());
        return redirect('/admin/pengumuman')->with('success', 'Pengumuman Berhasil di Update !');
    }
    //-------------------------------------------Cetak-------------------------------------------
    // Get Bukti Cetak 
    public function cetak()
    {
        $data_cetak = CetakBukti::all();
        // dd($data_cetak);
        return view('admin.cetakBukti.index', compact('data_cetak'));
    }
    // Detail Cetak
    public function detailCetak($id_cetak)
    {
        $data_cetak = CetakBukti::find($id_cetak);
        return view('admin.cetakBukti.detail', compact('data_cetak'));
    }
    public function accept(Request $request, $id_cetak)
    {
        $data_cetak = CetakBukti::find($id_cetak);
        $data_cetak->update([
            "status_cetak" => "Accept"
        ]);
        return redirect()->back()->with('success', 'Bukti telah disetujui');
    }
    //-------------------------------------Pengumpulan Tugas -------------------------------------
    // Get Pengumpulan
    public function pengumpulan()
    {
        
        $pengumpulan_tugas = PengumpulanTugas::all();
        $total_pengumpulan = PengumpulanTugas::count();
        $total_tugas = Tugas::count();
        $data_tugas = Tugas::all();
        $data_materi = Materi::all();
        return view('admin.pengumpulan.index', compact('pengumpulan_tugas', 'total_tugas','total_pengumpulan','data_materi','data_tugas'));
    }
    // Download Tugas
    public function downloadTugas($file)
    {
        return response()->download('file_tugas/' . $file);
    }
    // Accept Tugas
    public function accTugas($id_pengumpulan_tugas)
    {
        $data_pengumpulan = PengumpulanTugas::find($id_pengumpulan_tugas);
        $data_pengumpulan->update([
            "status_tugas" => "Diterima"
        ]);
        Alert::success('Berhasil !', 'Tugas telah diterima');
        return redirect()->back();
    }
    // Decline Tugas
    public function decTugas($id_pengumpulan_tugas)
    {
        $data_pengumpulan = PengumpulanTugas::find($id_pengumpulan_tugas);
        $data_pengumpulan->update([
            "status_tugas" => "Ditolak"
        ]);
        Alert::warning('Yaah:(', 'Tugas telah ditolak');
        return redirect()->back();
    }
    // Filter Tugas
    public function filterPengumpulan(Request $request){
        // $pengumpulan_tugas = PengumpulanTugas::all();
        $pengumpulan_tugas = PengumpulanTugas::where([
            "tugas_id" => $request->tugas_id
        ])->get();
        // dd($pengumpulan_tugas);
        $total_pengumpulan = PengumpulanTugas::count();
        $total_tugas = Tugas::count();
        $data_materi = Materi::all();
        $data_tugas = Tugas::all();
        return view('admin.pengumpulan.index', compact('pengumpulan_tugas', 'total_tugas', 'total_pengumpulan', 'data_materi','data_tugas'));
    }

    //-------------------------------------------Absensi-------------------------------------------
    // Get Absensi
    public function absensi()
    {
        $total_mentee = Mentee::count();
        $total_pertemuan = Pertemuan::count();
        $data_absensi = Absensi::all();
        $data_pertemuan = Pertemuan::all();
        $total_absensi = Absensi::count();
        $total_kegiatan = Kegiatan::count();
        $data_kegiatan = Kegiatan::all();
        $absensi = Absensi::all();
        return view('admin.absensi.index', compact('total_absensi', 'data_absensi', 'total_mentee', 'total_pertemuan', 'data_pertemuan', 'total_kegiatan','absensi','data_kegiatan'));
    }
    // Detail Absensi
    // public function detailAbsen($id_pertemuan)
    // {
    //     $data_pertemuan = Pertemuan::find($id_pertemuan);
    //     $absen = Absensi::where([
    //         "pertemuan_id" => $id_pertemuan
    //     ])->get();
    //     return view('admin.absensi.detail', compact('data_pertemuan', 'absen'));
    // }
    // Absensi Kegiatan
    public function absensiKegiatan()
    {
        $data_kegiatan = Kegiatan::all();
        $totalKegiatan = Kegiatan::count();
        return view('admin.absensi.kegiatan', compact(['data_kegiatan', 'totalKegiatan']));
    }
    // Filter Absensi
    public function filterAbsensi(Request $request){
        $total_mentee = Mentee::count();
        $total_pertemuan = Pertemuan::count();
        $absensi = Absensi::all();
        $data_absensi = Absensi::where([
            'kegiatan_id' => $request->absensi
        ])->get();
        $data_pertemuan = Pertemuan::all();
        $total_absensi = Absensi::count();
        $total_kegiatan = Kegiatan::count();
        $data_kegiatan = Kegiatan::all();
        return view('admin.absensi.index', compact('total_absensi', 'data_absensi', 'total_mentee', 'total_pertemuan', 'data_pertemuan', 'total_kegiatan','absensi','data_kegiatan'));
    }
}
