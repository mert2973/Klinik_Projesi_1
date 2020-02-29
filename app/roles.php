<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    public $timestamps=false;
    protected $fillable=['name'];
}
