<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Kibbview;
use App\Models\User;

class pengajuan extends Model
{
    use HasFactory;
    protected $table = "pengajuan";
    protected $guarded = [];
    protected $primaryKey = 'id_pengajuan';

    public function relpeng()
    {
        return $this->belongsTo(kibbview::class, 'id_barang');
    }

    public function relpengus()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
