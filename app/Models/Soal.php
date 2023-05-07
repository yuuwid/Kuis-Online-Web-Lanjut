<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;

    protected $table = 'soal';
    protected $primaryKey = 'id_soal';


    public function kuis()
    {
        return $this->belongsTo(Kuis::class, "id_soal", "id_soal");
    }


    public function options()
    {
        return $this->hasMany(Options::class, "id_option");
    }


    public function images()
    {
        return $this->hasMany(Images::class, "id_image");
    }


    public function details()
    {
        return $this->hasMany(ResultDetails::class, "id_soal");
    }
}
