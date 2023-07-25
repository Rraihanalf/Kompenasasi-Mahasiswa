<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaksanaan extends Model
{
    protected $fillable = [
        'id_pelaksanaan',
        'semester_mhs',
        'kelas_mhs',
        'jumlah_mhs',
        'ruangan',
        'prodi',
        'pengawas',
        'tgl_pelaksanaan',
        'kegiatan',
        'validasi_pengawas',
        'validasi_admin'
    ];
}
