<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    protected  $table="appointments";
    protected $fillable=['patients_id','doctors_id','apt_date','apt_time','apt_status'];
    protected $hidden=['password',"remember_token","updated_at","created_at",'the_dr_id',"email_verified_at"];


}
