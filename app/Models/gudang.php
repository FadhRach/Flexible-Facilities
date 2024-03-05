<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Kibbview;

class gudang extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "gudang";
    protected $guarded = [];
    protected $primaryKey = 'id_gudang';

    public function relgud()
    {
        return $this->belongsTo(kibbview::class, 'id_gudang');
    }

    public function relgudins()
    {
        return $this->hasMany(kibbview::class, 'id_gudang');
    }

    public function relperus()
    {
        return $this->belongsTo(perusahaan::class, 'id_perusahaan');
    }

    public function scopeSearch($query, $keyword)
    {
        return $query->where('nama_barang', 'like', '%' . $keyword . '%')
                     ->where('status_gudang', 'belum dikeluarkan');
    }

}
