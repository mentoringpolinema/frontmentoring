<?php
use app\Models\Mentee;
use app\Models\Mentor;
use app\Models\Prodi;
use app\Models\Jurusan;

function totalMentee(){
    return Mentee::count();
}

function totalMentor(){
    return Mentor::count();
}
function totalJurusan(){
    return Jurusan::count();
}
function totalProdi(){
    return Prodi::count();
}