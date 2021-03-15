<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panitia extends Model
{
    use HasFactory;

    protected $table = 'panitia';
    protected $primaryKey = 'id_panitia';
    protected $fillable = ['id_user', 'nama_panitia'];
}