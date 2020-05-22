<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casings extends Model
{
    protected $table="casings";
  protected $fillable=["clinic_id","service_name","branch_name","currency","cs_description","cs_phone"];
}
