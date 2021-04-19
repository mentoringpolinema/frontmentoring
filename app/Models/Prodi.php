<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodi';
    protected $primaryKey = 'id_prodi';
    protected $fillable = ['jurusan_id', 'nama_prodi', 'singkatan_prodi'];

    public function jurusan(){
        return $this->belongsTo(Jurusan::class, 'jurusan_id', 'id_jurusan');
    }

    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }
}
