<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic_Diagnosis extends Model
{
   protected $table="clinic_diagnoses";
    protected $fillable=['appointments_id','diagnoses'];
}
