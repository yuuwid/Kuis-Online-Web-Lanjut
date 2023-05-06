<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_result';

    public function users()
    {
        return $this->belongsTo(User::class, "id_user", "id_user");
    }

    public function kuis()
    {
        return $this->belongsTo(Kuis::class, "id_kuis", "id_kuis");
    }

    public function details()
    {
        return $this->hasMany(ResultDetails::class, "id_result");
    }
}
