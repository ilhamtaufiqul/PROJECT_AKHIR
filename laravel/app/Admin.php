<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminContoller extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'level'
    ];
}