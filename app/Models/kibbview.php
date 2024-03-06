<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Kibfview;
use App\Models\pengajuan;
use App\Models\gudang;


class kibbview extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = "barang";
    protected $guarded = [];
    protected $primaryKey = 'id_barang';
    protected $fillable = ["id_barang","kode_barang","nama_barang","register","id_ruangan","merk_type","tahun","jumlah_barang","harga","nilai","akumulasi","keterangan","status_barang","inven_brg"];

    public function relkibf()
    {
        return $this->belongsTo(Kibfview::class, 'id_ruangan');
    }

    public function relpengin()
    {
        return $this->hasMany(pengajuan::class, 'id_barang');
    }

    public function relgudin()
    {
        return $this->hasMany(gudang::class, 'id_gudang');
    }

    public function relgudins()
    {
        return $this->belongsTo(gudang::class, 'id_gudang');
    }
}
