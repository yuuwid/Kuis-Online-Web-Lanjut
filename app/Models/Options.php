<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_option';

    public function soal()
    {
        return $this->belongsTo(Soal::class, "id_soal", "id_soal");
    }

    public function images()
    {
        return $this->hasMany(Images::class, "id_image");
    }

    public function details()
    {
        return $this->hasMany(ResultDetails::class, "id_option");
    }
}
