<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angkatan extends Model
{
    use HasFactory;
    protected $table = 'angkatan';
    protected $primaryKey = 'id_angkatan';
    protected $fillable = ['angkatan'];

    public function mentee(){
        return $this->hasOne(Mentee::class);
    }
}
