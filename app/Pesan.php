<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $fillable = ['nama','subjek','email','pesan'];
}
