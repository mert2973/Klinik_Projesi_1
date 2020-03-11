<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor_Appointments extends Model
{
    protected $fillable=['usr_dr_id','patient_id','day','start_time_BF','end_time_BF','start_time_AF','end_time_AF',
                        'slot_time_mins','holiday'];


}
