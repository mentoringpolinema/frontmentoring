<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Mentee;
use App\Models\PengumpulanTugas;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class MainController extends Controller
{
    public function index()
    {
        return view('homepage.index');
    }
    public function auth(){
        return view('auth.index');
    }
    // public function cekMentoring(){
    //     return view('cek.index');
    // }
    public function cekMentoring(Request $request){
        if ($request->has('cari')) {
            $data_mentee = Mentee::where('nim_mentee','LIKE', $request->cari)->first();

            if ($data_mentee == null) {
                Alert::error('Ups, Maaf','Sepertinya NIM nya salah input');
                return view('cek.index');
            } else {
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
                // Redirect
                Alert::success('Ashiaap','Santuy');
                return view('cek.detail', compact('data_mentee', 'status'));
            }
        }
        else{
            Alert::error('Ups, Maaf', 'Sepertinya NIM nya salah input');
            return view('cek.index');
        }
        return view('cek.detail',compact('data_mentee'))->with('success','yeay');
    }
}
