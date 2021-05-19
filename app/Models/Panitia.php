<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panitia extends Model
{
    use HasFactory;

    protected $table = 'panitia';
    protected $primaryKey = 'id_panitia';
    protected $fillable = ['user_id', 'nama_panitia', 'status_panitia'];

    public function keluhan(){
        return $this->hasOne(Keluhan::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
