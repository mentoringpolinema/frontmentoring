<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model{
    protected $table = 'mentor';
    protected $primaryKey = 'id_mentor';
    protected $fillable = ['nama_mentor','email_mentor','alamat_mentor','notelp_mentor'];
}