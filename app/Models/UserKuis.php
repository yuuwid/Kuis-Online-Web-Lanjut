<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserKuis extends Pivot
{
    protected $primaryKey = 'id_user_kuis';


    public function jawab()
    {
        return $this->hasOne(Jawab::class, 'id_user_kuis');
    }
}
