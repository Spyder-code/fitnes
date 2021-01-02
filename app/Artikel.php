<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $guard = [];
    protected $fillable = ['judul', 'kontent','text','image','image_path'];
    protected $table = 'artikel';
}
