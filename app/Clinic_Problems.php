<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic_Problems extends Model
{
    protected $table="clinic_problems";
    protected $fillable=['apt_problmes_id','problems'];
}
