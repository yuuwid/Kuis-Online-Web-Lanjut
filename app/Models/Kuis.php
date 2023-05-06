<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuis extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kuis';

    public function results()
    {
        return $this->hasMany(Results::class, "id_kuis");
    }

    public function soal()
    {
        return $this->hasMany(Soal::class, "id_soal");
    }
}
