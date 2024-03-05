<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Kibfview;

class kibeview extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = "barang";
    protected $guarded = [];
    protected $primaryKey = 'id_barang';

    public function relkibf()
    {
        return $this->belongsTo(Kibfview::class, 'id_ruangan');
    }
}
