<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perguruan extends Model
{
    use HasFactory;
    protected $table = "perguruan";
    protected $primaryKey = 'id_perguruan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_user',
        'nama',
        'arti_nama',
        'motto',
        'sejarah',
        'deskripsi',
        'nama_file_logo',
        'makna_logo',
        'tahun_berdiri',
        'aliran',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'desa',
        'nama_jalan',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    //     'password' => 'hashed',
    // ];
}
