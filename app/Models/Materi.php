<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = 'materi';
    protected $primaryKey = 'id_materi';
    protected $fillable = ['nama_materi','link_materi','link_materi_embed','detail_materi', 'slug','kegiatan_id'];

    public function tugas(){
        return $this->hasMany(Tugas::class);
    }
    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'kegiatan_id');
    }
}
