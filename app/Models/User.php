<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_user';

    public function results()
    {
        return $this->hasMany(Results::class, "id_user");
    }
}
