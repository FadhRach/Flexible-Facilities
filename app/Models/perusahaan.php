<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\gudang;

class perusahaan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "perusahaan";
    protected $guarded = [];
    protected $primaryKey = 'id_perusahaan';

    public function relperus()
    {
        return $this->hasMany(gudang::class, 'id_perusahaan');
    }
}
