<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic_Observations extends Model
{
    protected $table="clinic_observations";
    protected $fillable=['apt_observations_id','observations'];
}
