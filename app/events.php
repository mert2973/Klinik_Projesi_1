<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    protected $table="events";
    protected $fillable=['title','start','end'];
    //public $timestamps=false;

}
