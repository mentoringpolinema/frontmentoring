<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengumpulanTugas extends Model
{
    use HasFactory;
    protected $table = 'pengumpulan_tugas';
    protected $primaryKey = 'id_pengumpulan_tugas';
    protected $fillable = ['file_tugas', 'tugas_id', 'mentee_id'];

    public function tugas(){
        return $this->belongsTo(Tugas::class, 'tugas_id', 'id_tugas');
    }

    public function mentee()
    {
        return $this->hasOne(Mentee::class);
    }
}
