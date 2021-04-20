<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentee extends Model
{
    use HasFactory;

    protected $table = 'mentee';
    protected $primaryKey = 'id_mentee';
    protected $fillable = ['id_user', 'nama_mentee','nim_mentee','status_mentee'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
