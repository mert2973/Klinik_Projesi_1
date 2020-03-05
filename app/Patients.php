<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    protected $fillable=['the_dr_id','p_name','p_surname','p_email','p_phone','status'];

    public function all_patients_list(){
     return $this->belongsToMany('App\Patient_Infos','patient_and_patient_infos',
         'patients_id','patient_infos_id');

    }
}
