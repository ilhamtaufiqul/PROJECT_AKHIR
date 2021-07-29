<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opentrip extends Model
{
    protected $table = 'opentrip';
    protected $dates = ['jadwal_pemberangkatan'];

    public function mountains()
    {
        return $this->belongsTo('App\Mountain2', 'id_mountain', 'id');
    }

    public function opentrips()
    {
        return $this->belongsTo('App\Mountain2', 'id_opentrip', 'id');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
