<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    protected $fillable=["clinic_id","spp_name","spp_email","spp_phone","spp_adress"];
}
