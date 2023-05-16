<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvitationCode extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_invite_code';


    public function kuis()
    {
        return $this->hasMany(Kuis::class, "id_kuis");
    }
}
