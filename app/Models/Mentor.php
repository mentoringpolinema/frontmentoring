<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model{
    protected $table = 'mentor';
    protected $primaryKey = 'id_mentor';
    protected $fillable = ['user_id', 'nama_mentor','email_mentor','alamat_mentor','status_mentor','notelp_mentor', 'slug'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function pertemuan()
    {
        return $this->hasMany(Pertemuan::class);
    }
    public function kelompok()
    {
        return $this->hasOne(Kelompok::class);
    }

}
