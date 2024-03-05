<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\pengajuan;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "user";

    protected $primaryKey = "id_user";

    protected $fillable = [
        'id_user',
        'name',
        'email',
        'password',
        'role',
        'jabatan',
        'profile_image',
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
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function relpengin()
    {
        return $this->hasMany(pengajuan::class, 'id_user');
    }

    public function pinjambarang()
    {
        return $this->hasMany(pinjam_barang::class, 'id_pinjambarang');
    }

    public function pinjamtempat()
    {
        return $this->hasMany(pinjam_tempat::class, 'id_pinjamtempat');
    }
}
