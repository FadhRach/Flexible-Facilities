<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kibaview extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = "kib_a";
    protected $guarded = [];
    protected $primaryKey = 'id_kib_a';

}
