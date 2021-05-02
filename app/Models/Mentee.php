<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentee extends Model
{
    use HasFactory;

    protected $table = 'mentee';
    protected $primaryKey = 'id_mentee';
    protected $fillable = ['user_id', 'nama_mentee','nim_mentee','status_mentee'];
    
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function angkatan(){
        return $this->belongsTo(Angkatan::class,'angkatan_id');
    }
    public function kelas(){
        return $this->belongsTo(Kelas::class,'kelas_id');
    }
    public function kelompok(){
        return $this->belongsTo(Kelompok::class,'kelompok_id');
    }
    public function keluhan(){
        return $this->belongsTo(Keluhan::class,'keluhan_id');
    }
    public function absensi(){
        return $this->hasMany(Keluhan::class);
    }
   


}
