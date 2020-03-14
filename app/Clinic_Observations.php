<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic_Observations extends Model
{
    protected $table="clinic_observations";
    protected $fillable=['appointments_id','observations'];
}
