<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    protected $table = 'keluhan';
    protected $primaryKey = 'id_keluhan';
    protected $fillable = ['isi_keluhan','jawab_keluhan'];

    public function mentee()
    {
        return $this->belongsTo(Mentee::class,'mentee_id');
    }
    public function panitia()
    {
        return $this->hasOne(Panitia::class,'panitia_id');
    }
}
