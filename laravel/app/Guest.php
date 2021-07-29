<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = 'album';

    public function photos()
    {
        return $this->hasMany('App\Galeri', 'id_album', 'id');
    }
}