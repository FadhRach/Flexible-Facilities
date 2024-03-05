<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjam_tempat extends Model
{
    use HasFactory;
    protected $table = "pinjam_tempat";
    protected $primaryKey = "id_pinjamtempat";
    protected $fillable = ["id_pinjamtempat","id_user","id_ruangan","time_from","time_to","deskripsi","status_acc"];

    public function ruangan() 
    { 
        return $this->belongsTo(kibfview::class,'id_ruangan'); 
    }

    public function user() 
    { 
        return $this->belongsTo(User::class,'id_user'); 
    }
}
