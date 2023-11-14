<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Petugas extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = 'petugas';
    protected $table = 'petugas';
    protected $primaryKey = 'id_petugas';
    protected $fillable = [
        'username',
        'password',
        'nama_petugas',
        'level',
    ];
    public $timestamps = false;
}
