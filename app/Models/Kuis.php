<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuis extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kuis';


    public function users()
    {
        return $this->belongsToMany(User::class, 'user_kuis', 'id_kuis', 'id_user');
    }

    public function soal()
    {
        return $this->hasMany(Soal::class, 'id_soal', 'id_soal');
    }
}
