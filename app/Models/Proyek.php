<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_siswa',
        'nama_proyek',
        'tanggal',
        'deskripsi',
        'foto',
    ];
    protected $table = "proyek";
    public function siswa() {
        return $this->belongsTo(siswa::class, 'id_siswa');
    }
}
