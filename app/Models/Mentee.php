<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentee extends Model
{
    use HasFactory;

    protected $table = 'mentee';
    protected $primaryKey = 'id_mentee';
    protected $fillable = ['nama_mentor','email_mentor','alamat_mentor','status_mentor','notelp_mentor', 'user_id'];
}
