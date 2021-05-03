<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model{
    protected $table = 'mentor';
    protected $primaryKey = 'id_mentor';
    protected $fillable = ['user_id', 'nama_mentor','email_mentor','alamat_mentor','status_mentor','notelp_mentor', 'slug'];

    public function user()
    {
        return $this->belongsTo(User::class,'id');
    }
    public function pertemuan()
    {
        return $this->belongsTo(Pertemuan::class,'pertemuan_id');
    }
    public function kelompok()
    {
        return $this->belongsTo(Kelompok::class,'kelompok_id');
    }

}
