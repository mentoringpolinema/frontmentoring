<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Dashboard Function
    public function index()
    {
        $data_kegiatan = \App\Models\Kegiatan::all();
        return view('admin.index', ['data_kegiatan' => $data_kegiatan]);
    }

    //--Kegiatan Function--

    //Get Kegiatan
    public function kegiatan()
    {
        $data_kegiatan = \App\Models\Kegiatan::all();
        return view('admin.kegiatan', ['data_kegiatan' => $data_kegiatan]);
    }

    // Add Kegiatan
    public function addKegiatan(Request $request)
    {
        $kegiatan = \App\Models\Kegiatan::create([
            "nama_kegiatan" => $request->nama_kegiatan,
            "jenis_kegiatan" => $request->jenis_kegiatan,
            "tanggal_kegiatan" => $request->tanggal_kegiatan,
            "minggu_kegiatan" => $request->minggu_kegiatan,
            "detail_kegiatan" => $request->detail_kegiatan
        ]);
        return redirect('/admin/kegiatan')->with('success', 'Kegiatan Berhasil ditambahkan !');
    }
    // Delete Kegiatan
    public function delKegiatan($id_kegiatan)
    {
        $data_kegiatan = \App\Models\Kegiatan::find($id_kegiatan);
        $data_kegiatan->delete($data_kegiatan);
        return redirect('/admin/kegiatan')->with('success', 'Kegiatan Berhasil dihapus !');
    }

    // Mentor Function 
    public function mentor()
    {
        $data_mentor = \App\Models\Mentor::all();
        return view('admin.mentor', ['data_mentor' => $data_mentor]);
    }

    // Get Mentor By ID
    public function mentorById($id)
    {
        $data_mentor = \App\Models\Mentor::find($id);
        return view('admin.mentor', ['data_mentor' => $data_mentor]);
    }

    // Add Mentor
    public function addMentor(Request $request)
    {

        $user = \App\Models\User::create([
            "role" => "mentor",
            "name" => $request->nama_mentor,
            "email" => $request->email_mentor,
            "password" => Hash::make($request->nama_mentor),
        ]);

        $productId = DB::getPdo()->lastInsertId();

        $mentor = \App\Models\Mentor::create([
            "nama_mentor" => $request->nama_mentor,
            "email_mentor" => $request->email_mentor,
            "alamat_mentor" => $request->alamat_mentor,
            "notelp_mentor" => $request->notelp_mentor,
            "status_mentor" => $request->status_mentor,
            "user_id" => $productId
        ]);

        return redirect('/admin/mentor')->with('success', 'Mentor Berhasil ditambahkan !');
    }

    // Update Mentor
    public function updateMentor(Request $request, $id)
    {
        $data_mentor = \App\Models\Mentor::findOrFail($id);
        $data_mentor = \App\Models\User::update([
            "role" => "mentor",
            "name" => $request->nama_mentor,
            "email" => $request->email_mentor,
            "password" => Hash::make($request->nama_mentor),
        ]);

        return redirect('/admin/mentor')->with('success', 'Mentor Berhasil diperbarui !');
    }

    // Delete Mentor
    public function delMentor($id_mentor)
    {
        $data_mentor = \App\Models\Mentor::find($id_mentor);
        $data_mentor->delete($data_mentor);
        return redirect('/admin/mentor')->with('success', 'Mentor Berhasil dihapus !');
    }

    // Mentee Function
    public function mentee()
    {
        $data_mentee = \App\Models\Mentee::all();
        return view('admin.mentee', ['data_mentee' => $data_mentee]);
    }

    // Users Function
    public function user()
    {
        return view('admin.user');
    }

    // Data Function

    // Get Data
    public function data()
    {
        $data_jurusan = \App\Models\Jurusan::all();
        $data_prodi = \App\Models\Prodi::all();
        return view('admin.data', ['data_jurusan' => $data_jurusan], ['data_prodi' => $data_prodi]);
    }
    // Add Data
    // Add Jurusan
    public function addJurusan(Request $request)
    {
        \App\Models\Jurusan::create($request->all());
        return redirect('/admin/data')->with('success', 'Data Jurusan Berhasil ditambahkan !');
    }
    // Add Prodi
    public function addProdi(Request $request)
    {
        \App\Models\Prodi::create($request->all());
        return redirect('/admin/data')->with('success', 'Data Prodi Berhasil ditambahkan !');
    }
    // Delete Data
    // Delete Jurusan

    // Delete Prodi

    // Materi Function
    public function materi()
    {
        $data_materi = \App\Models\Materi::all();
        $data_kegiatan = \App\Models\Kegiatan::all();
        return view('admin.materi', ['data_materi' => $data_materi], ['data_kegiatan' => $data_kegiatan]);
    }

    // Add Materi
    public function addMateri(Request $request)
    {
        $materi = \App\Models\Materi::create([
            "nama_materi" => $request->nama_materi,
            "link_materi" => $request->link_materi,
            "detail_materi" => $request->detail_materi
        ]);
        return redirect('/admin/materi')->with('success', 'Materi Berhasil ditambahkan !');
    }
    // Delete Materi
    public function delMateri($id_materi)
    {
        $data_materi = \App\Models\Materi::find($id_materi);
        $data_materi->delete($data_materi);
        return redirect('/admin/materi')->with('success', 'Materi Berhasil dihapus !');
    }

    // Kelompok Function
    public function kelompok()
    {
        $data_kelompok = \App\Models\Kelompok::all();
        return view('admin.kelompok', ['data_kelompok' => $data_kelompok]);
    }

    //Add Kelompok
    public function addKelompok(Request $request)
    {

        $kegiatan = \App\Models\Kelompok::create([
            "nama_kegiatan" => $request->nama_kegiatan,
            "jenis_kegiatan" => $request->jenis_kegiatan,
            "tanggal_kegiatan" => $request->tanggal_kegiatan,
            "detail_kegiatan" => $request->detail_kegiatan,
        ]);

        return redirect('/admin/kelompok')->with('success', 'Kelompok Berhasil ditambahkan !');
    }
    // Get Kelompok


    // Keluhan Function
    public function keluhan()
    {
        return view('admin.keluhan');
    }

}
