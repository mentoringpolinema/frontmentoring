<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    protected $fillable = ['kelas', 'prodi_id'];

    public function prodi(){
        return $this->belongsTo(Prodi::class, 'prodi_id', 'id_prodi');
    }
    public function mentee(){
        return $this->hasOne(Kelas::class);
    }
}
