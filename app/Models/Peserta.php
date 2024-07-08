<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik',
        'nama',
        'email',
        'no_hp',
        'jenis_kelamin',
        'pendidikan',
        'alamat',
        'tahun',
        'id_jurusan',
        'id_gelombang',
    ];

    public function Jurusan() {
        return $this->belongsTo(Jurusan::class,'id_jurusan', 'id');
    }
    public function Gelombang() {
        return $this->belongsTo(Gelombang::class, 'id_gelombang', 'id');
    }
}
