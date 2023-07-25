<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kompensasi extends Model
{
    protected $fillable = [
        'id_kompen',
        'nim_mhs',
        'total_jam'
    ];
}
