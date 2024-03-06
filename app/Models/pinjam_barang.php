<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjam_barang extends Model
{
    use HasFactory;
    protected $table = "pinjam_barang";
    protected $primaryKey = "id_pinjambarang";
    protected $fillable = ["id_pinjambarang","id_user","id_barang","deskripsi","time_from","time_to","status_acc"];


    public function barang() 
    { 
        return $this->belongsTo(kibbview::class,'id_barang'); 
    }

    public function user() 
    { 
        return $this->belongsTo(User::class,'id_user'); 
    }
}
