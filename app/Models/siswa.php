<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $guarded = ["id"];
    protected $table = "siswa";
    
    public function kontak() {
        return $this->hasMany(kontak::class, 'id_siswa');
    }
    public function proyek() {
        return $this->hasMany(Proyek::class, 'id_siswa');
    }
}
