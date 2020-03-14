<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Patient;
use Illuminate\Support\Facades\DB;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','surname','usr_name', 'email', 'password','phone'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public $timestamps=false;

    public function patients_list(){
      $aa=  $this->hasMany('App\Patients','the_dr_id')
            ->join('patient_and_patient_infos','patient_and_patient_infos.patients_id','=','patients.id')
            ->join('patient_infos','patient_infos.id','=','patient_and_patient_infos.patient_infos_id')
            ->paginate(4);
      return $aa;
    }

    public function appointments(){
        //return   DB::table('appointments as ap')->where('doctors_id',Auth::user()->id)
        return   $this->hasMany('App\Appointments','doctors_id')
            ->join('patients','patients.id','=','appointments.patients_id')
            ->join('users','users.id','=','appointments.doctors_id')->paginate(4);
    }
    public function doctor_with_his_patients(){
      return  $this->hasMany('App\Appointments','doctors_id')
              ->join('patients','patients.id','=','appointments.patients_id')
              ->join('users','users.id','=','appointments.doctors_id')
              ->join('patient_and_patient_infos as ppi','ppi.patients_id','=','patients.id')
              ->join('patient_infos as pi','pi.id','=','ppi.patient_infos_id')
              ->join('clinic_problems as cp','cp.appointments_id','=','appointments.id')
              ->get();
    }
    public function all_doctors_of_sub_master_doctor(){
        return $this->hasMany('App\masterDoctors_and_Clinics','master_dr_id')
            ->join('UsersGenInfo_of_SubMasterDr as ugi','ugi.masterDr_and_clinic_id','=','masterDr_and_Clinics.id')
            ->join('users','users.id','=','ugi.user_id')
            ->join('general_infos as gi','gi.id','=','ugi.general_info_id')
            ->join('info_details','info_details.general_infos_id','=','gi.id')->paginate(4);
    }
    public function doctor_self_info(){
        return $this->hasMany('App\UsersGenInfo_of_SubMasterDoctor','user_id')
           ->join('general_infos as gi','gi.id','=','UsersGenInfo_of_SubMasterDr.general_info_id')
            ->join('users','users.id','=','UsersGenInfo_of_SubMasterDr.user_id')
            ->join('info_details','info_details.general_infos_id','=','gi.id');
    }


    public  function get_roles(){
        return  $this->belongsToMany('App\Roles','role_user','user_id','role_id');
    }

    public  function the_role() {
        foreach ( $this->get_roles()->get() as $ytk ) {
            return $ytk->all_roles;
        }
    }
    public function yetkili_kisi_doktor(){
       if($this->the_role()=="Doktor" ){
           return true;
       }else{
           return false;
       }
    }
    public function check_gender(){
        if($this->the_role()=="Doktor"){
            return $this->belongsToMany('App\General_Infos','UsersGenInfo_of_SubMasterDr',
                'user_id','general_info_id')->get(['gender']);
        }elseif($this->the_role()=="Doktor(Master)"){
            return $this->belongsToMany('App\General_Infos','masterDr_and_GenInfo',
                'masterDr_id','general_info_id')->get(['gender']);
        }

    }

}
