<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    protected $table = 'guide';
    protected $dates = ['tglahir_guide'];

    public function mountains()
    {
        return $this->belongsTo('App\Mountain', 'id_mountain', 'id');
    }

    public function guides()
    {
        return $this->belongsTo('App\Mountain', 'id_guide', 'id');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
}