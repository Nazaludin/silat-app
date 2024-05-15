<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Classes\UserRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'email_verified',
        'access_status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'allow_access_at' => 'datetime',
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Di dalam model pengguna (User.php) atau model terpisah
    public function hasRole($role)
    {
        // Logika untuk memeriksa peran pengguna
        $roleClass = new UserRole;
        $roleName = $roleClass->get($this->role);
        // dd($role, $roleName);
        return $role === $roleName;
    }
    // Di dalam model pengguna (User.php) atau model terpisah
    // public function getVerified()
    // {
    //     $status = isset($this->email_verified_at);
    //     return $status;
    // }
    // public function getAccess()
    // {
    //     $tanggal = Carbon::parse($this->updated_at)->format('d/m/Y H:i') . ' WIB';
    //     return $tanggal;
    // }

}
