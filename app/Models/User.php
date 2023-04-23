<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_user';

    public function kuis()
    {
        return $this->belongsToMany(Kuis::class, 'user_kuis', 'id_user', 'id_kuis');
    }
}
