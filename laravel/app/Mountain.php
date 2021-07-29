<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mountain extends Model
{
    protected $table = 'mountain';

    public function photos()
    {
        return $this->hasMany('App\Guide', 'id_mountain', 'id');
    }
}
