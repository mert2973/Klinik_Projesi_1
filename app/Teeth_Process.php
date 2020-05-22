<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teeth_Process extends Model
{
   protected $table="teeth_processes";
   protected $fillable=["apt_id","itm_id","control_invoice","prc_name","piece","itm_type","exp_prc","teeth_num"];
}
