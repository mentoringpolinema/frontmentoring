<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;
    protected $table = 'tugas';
    protected $primaryKey = 'id_tugas';
    protected $fillable = ['pertemuan_id','mentee_id', 'file_tugas'];

    public function mentee()
    {
        return $this->belongsTo(Mentee::class,'mentee_id');
    }
    public function pertemuan()
    {
        return $this->belongsTo(Pertemuan::class,'pertemuan_id');
    }
}
