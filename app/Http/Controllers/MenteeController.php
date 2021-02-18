<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenteeController extends Controller
{
    public function index()
    {
        $data_kegiatan = \App\Models\Kegiatan::all();
        return view('mentee.index', ['data_kegiatan' => $data_kegiatan]);
    }
}