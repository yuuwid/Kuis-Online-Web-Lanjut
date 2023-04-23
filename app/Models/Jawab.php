<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawab extends Model
{
    use HasFactory;

    protected $primaryKey = "id_jawab";


    public function user_kuis()
    {
        return $this->hasOne(UserKuis::class, 'id_user_kuis');
    }


    public function soal()
    {
        return $this->belongsToMany(Soal::class, 'jawab_soal', 'id_jawab', 'id_soal');
    }
}
