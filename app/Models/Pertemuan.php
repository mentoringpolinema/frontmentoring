<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pertemuan extends Model
{
    protected $table = 'pertemuan';
    protected $primaryKey = 'id_pertemuan';
    protected $fillable = ['nama_pertemuan', 'link_pertemuan', 'detail_pertemuan','kegiatan_id', 'kelompok_id'];

    public function absensi(){
        return $this->hasMany(Absensi::class);
    }
    // public function mentor(){
    //     return $this->belongsTo(Mentor::class,'mentor_id');
    // }
    public function kegiatan(){
        return $this->belongsTo(Kegiatan::class,'kegiatan_id');
    }
    public function kelompok(){
        return $this->belongsTo(Kelompok::class,'kelompok_id');
    }

}
