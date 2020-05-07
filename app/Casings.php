<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CasingDB extends Model
{
    protected $table="casing";
  protected $fillable=["service_name","currency","cs_desrciption","cs_phone"];
}
