<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medical_history extends Model
{
    protected $table="medical_histories";
   protected $fillable=['patient_id','diabetes','heart_problems','kidney_stones','cancer',
       'pregnancy','high_blood_pressure','asthma','jaundice','hiv_aids','blood_thinners','high_cholesterol',
       'kidney_disease','rheumatic_fever','epilepsy',];
}
