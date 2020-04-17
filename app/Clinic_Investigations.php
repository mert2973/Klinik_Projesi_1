<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic_Investigations extends Model
{
    protected $table="clinic_investigations";
    protected $fillable=['apt_investigations_id','investigations'];
}
