<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    protected $table = 'kelompok';
    protected $primaryKey = 'id_kelompok';
    protected $fillable = ['nama_kelompok','mentor_id', 'materi_id'];

    public function mentee(){
        return $this->hasOne(Mentee::class);
    }
    public function mentor(){
        return $this->belongsTo(Mentor::class, 'mentor_id');
    }
}
