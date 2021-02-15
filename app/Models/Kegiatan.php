<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    protected $primaryKey = 'id_kegiatan';
    protected $fillable = ['nama_kegiatan','jenis_kegiatan','tanggal_kegiatan', 'detail_kegiatan','jam_kegiatan','minggu_kegiatan'];
}
