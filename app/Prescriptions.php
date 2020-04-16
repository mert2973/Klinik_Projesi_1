<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescriptions extends Model
{
    protected $table="prescriptions";
    protected $fillable=["apt_id","mdc_name","","mdc_generic","mdc_dose","mdc_duration","mdc_instruction"];
}
