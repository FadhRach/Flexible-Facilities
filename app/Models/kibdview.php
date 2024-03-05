<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kibdview extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = "kib_d";
    protected $guarded = [];
    protected $primaryKey = 'id_kib_d';
}
