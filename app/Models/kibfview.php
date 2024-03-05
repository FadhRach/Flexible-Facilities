<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kibfview extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = "ruangan";
    protected $guarded = [];
    protected $primaryKey = 'id_ruangan';
    public function relkibb()
    {
        return $this->hasMany(kibbview::class, 'id_ruangan');
    }

    public function barang()
    {
        return $this->hasMany(kibbview::class, 'id_barang');
    }

    public function relkibe()
    {
        return $this->hasMany(kibeview::class, 'id_ruangan');
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
