<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;
    protected $table = 'tugas';
    protected $primaryKey = 'id_tugas';
<<<<<<< HEAD
    protected $fillable = ['nama_tugas','detail_tugas', 'pertemuan_id'];

    public function pertemuan()
    {
        return $this->belongsTo(Pertemuan::class,'pertemuan_id');
    }

    public function pengumpulanTugas()
    {
        return $this->hasMany(PengumpulanTugas::class);
=======
    protected $fillable = ['pertemuan_id','mentee_id', 'file_tugas'];

    public function mentee()
    {
        return $this->belongsTo(Mentee::class,'mentee_id');
    }
    public function pertemuan()
    {
        return $this->belongsTo(Pertemuan::class,'pertemuan_id');
>>>>>>> c6274f0930154502e08608cdd63949cd28d2d239
    }
}
