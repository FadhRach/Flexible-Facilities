<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kibcview extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = "kib_c";
    protected $guarded = [];
    protected $primaryKey = 'id_kib_c';
}
