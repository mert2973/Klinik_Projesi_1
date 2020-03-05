<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient_Infos extends Model
{
    protected $table="patient_infos";
    protected $fillable=['city','country','adress_1','adress_2','gender','date_of_birth','postal_zip','blood_group'];
}
