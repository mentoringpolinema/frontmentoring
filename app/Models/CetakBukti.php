<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CetakBukti extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $table = 'cetak_bukti';
    protected $primaryKey = 'id_cetak' ;
    protected $fillable = ['kode_cetak','mentee_id','status_cetak'];

    public function mentee(){
        return $this->belongsTo(Mentee::class,'mentee_id');
    }

}
