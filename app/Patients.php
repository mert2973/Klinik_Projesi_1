<?php

namespace App;

use App\Http\Controllers\Clinic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Patients extends Model
{
    protected $fillable=['who_add_patient','clinic_id','p_name','p_surname','p_email','p_phone','status'];
    protected $hidden=["password","remember_token",
        "email_verified_at","who_add_patient"];// make hidden the attributes when the r.ship fnc(Invoices_Sales) is running at clinic model

    public function all_patients_list(){// All patients are depending to the main clinic
        /* $clinic_id=Auth::user()->the_clinic_id();
        return DB::table('patients as pt')
              //->join('patient_and_patient_infos as ppi','ppi.patients_id','=','pt.id')
              ->join('patient_infos as pi','pi.patient_id','=','pt.id')
              ->where('pt.clinic_id',$clinic_id)
             ->paginate(3); */

     return $this->hasMany('App\Patient_Infos','patient_id'); //dont forget to call the function with where clinic_id

    }
}
