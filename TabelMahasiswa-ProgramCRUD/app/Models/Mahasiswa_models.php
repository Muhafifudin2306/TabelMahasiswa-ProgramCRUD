<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
#model = mewakili

class Mahasiswa_models extends Model
{
    protected $table = 'tabel_mahasiswa';
    #model mewakili tabel mahasiswa

    protected $primaryKey = "nim";
    #model nama kolom primaryKey yaitu nim

    protected $fillable = [
        'nim',
        'nama_MHS',
        'prodi',
        'jurusan',
        'angkatan',
        'alamat',
    ];
    #model kolom pada tabel mahasiswa

}
