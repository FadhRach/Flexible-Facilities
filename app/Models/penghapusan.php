<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penghapusan extends Model
{
    use HasFactory;

    protected $table = "penghapusan_data";
    protected $guarded = [];
    protected $primaryKey = 'id_penghapusan';

}
