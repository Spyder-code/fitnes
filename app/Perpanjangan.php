<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perpanjangan extends Model
{
    protected $table = 'perpanjangan';
    protected $fillable = ['id_member','aktif','tenggat','uang','bukti','status'];

    public function member()
    {
        return $this->belongsTo(User::class,'id_member');
    }
}
