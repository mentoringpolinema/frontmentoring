<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pertemuan extends Model
{
    protected $table = 'pertemuan';
    protected $primaryKey = 'id_pertemuan';
    // protected $guarded = ['id_pertemuan'];
    protected $fillable = ['nama_pertemuan', 'mentor_id', 'minggu_pertemuan', 'tanggal_pertemuan', 'link_pertemuan', 'detail_pertemuan'];

    public function absensi(){
        return $this->hasMany(Absensi::class);
    }

}
