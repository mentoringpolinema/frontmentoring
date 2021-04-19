<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;
    protected $table = 'pengumuman';
    protected $primaryKey = 'id_pengumuman';
    protected $fillable = ['judul_pengumuman', 'tagline_pengumuman', 'tagline_pengumuman', 'status_pengumuman', 'detail_pengumuman'];
}
