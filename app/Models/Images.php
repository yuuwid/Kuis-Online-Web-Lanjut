<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_image';


    public function soal()
    {
        return $this->belongsTo(Soal::class, "id_soal", "id_soal");
    }

    public function options()
    {
        return $this->belongsTo(Options::class, "id_option", "id_option");
    }
}
