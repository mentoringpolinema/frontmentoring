<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = 'materi';
    protected $primaryKey = 'id_materi';
    protected $fillable = ['nama_materi','minggu_materi','link_materi','link_materi_embed','detail_materi'];
}
