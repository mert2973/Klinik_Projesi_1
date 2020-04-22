<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teeth_Process extends Model
{
   protected $table="teeth_processes";
   protected $fillable=["apt_id","prc_name","piece","exp_prc","teeth_num"];
}
