<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function mentor()
    {
        return $this->hasOne(Mentor::class);
    }

    public function mentee()
    {
        return $this->hasOne(Mentee::class);
    }

    public function panitia()
    {
        return $this->hasOne(Panitia::class);
    }
    public function materi()
    {
        return $this->hasOne(Materi::class);
    }

    public function pengumpulan_tugas(){
        return $this->hasMany(PengumpulanTugas::class);
    }
    public function cetak_bukti(){
        return $this->hasMany(CetakBukti::class);
    }

    
}
