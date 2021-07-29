<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MountainOpenTrip extends Model
{
    protected $table = 'mountain';

    public function photos()
    {
        return $this->hasMany('App\Opentrip', 'id_mountain', 'id');
    }
}
