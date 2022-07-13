<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ormawa extends Model
{
    use HasFactory;
    protected $table = 'ormawas';
    protected $fillable = [
        'id', 'namaLengkap', 'namaSingkat', 'kategoris_id','visi','misi','deskripsi'
    ];

    public function kategoris(){
        return $this->belongsTo(Kategori::class, 'kategoris_id');
    }

    public function prodis(){
        return $this->hasOne(Prodi::class, 'ormawas_id');
    }

    public function ukms(){
        return $this->hasOne(Ukm::class, 'ormawas_id');
    }

    public function himpunans(){
        return $this->hasOne(Himpunan::class, 'ormawas_id');
    }
}
