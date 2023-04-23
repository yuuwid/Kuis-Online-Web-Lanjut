<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;

    protected $primaryKey = "id_soal";


    public function kuis()
    {
        return $this->belongsTo(Kuis::class, 'id_kuis', 'id_kuis');
    }


    public function jawaban()
    {
        return $this->hasMany(Jawaban::class, 'id_jawaban', 'id_jawaban');
    }


    public function jawab()
    {
        return $this->belongsToMany(Jawab::class, 'jawab_soal', 'id_soal', 'id_jawab');
    }
}
