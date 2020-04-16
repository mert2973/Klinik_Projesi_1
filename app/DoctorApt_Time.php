<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorApt_Time extends Model
{
    protected $table="doctor_apt_times";
    protected $fillable=["doctor_id","day","bfr_lunch_begin","bfr_lunch_end","aftr_lunch_begin",
        "aftr_lunch_end","range_time","holiday","accept_apnt"];
}
