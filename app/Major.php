<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $table = 'majors';
    public $primarykey = 'id';
    public $timestamps = true;
}
