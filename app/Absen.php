<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $fillable = ['id_member'];

    public function member()
    {
        return $this->belongsTo(User::class,'id_member');
    }

}
