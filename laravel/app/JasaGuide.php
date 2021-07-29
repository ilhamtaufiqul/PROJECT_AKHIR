<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JasaGuide extends Model
{
    protected $table = 'list_jasaguide';
    protected $dates = ['tgl_lahir'];
}