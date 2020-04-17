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

    /*public function patients_list(){
      $aa=  $this->hasMany('App\Patients','who_add_patient')
            ->join('patient_and_patient_infos','patient_and_patient_infos.patients_id','=','patients.id')
            ->join('patient_infos','patient_infos.id','=','patient_and_patient_infos.patient_infos_id')
            ->paginate(4);
      return $aa;
    } */

    public function appointments(){ // patients who have  appointments(list at appointments page)
        if(Auth::user()->the_role()=="Doktor"){
            return   $this->hasMany('App\Appointments','doctors_id')
                ->join('patients','patients.id','=','appointments.patients_id')
                ->join('users','users.id','=','appointments.doctors_id')
                ->select('*')->selectRaw('appointments.id'); // for having apt id at top
                //->paginate(4); (note:use paginate() or get() at the each function)
        }elseif(Auth::user()->the_role()=="Doktor(Master)"){
            return $this->hasMany('App\masterDoctors_and_Clinics','master_dr_id')
                ->join('patients as pt','pt.clinic_id','=','masterDr_and_Clinics.clinic_id')
                //->join('patient_and_patient_infos as ppi','ppi.patients_id','=','pt.id')
               // ->join('patient_infos as pi','pi.patient_id','=','pt.id')
                ->join('appointments as apt','apt.patients_id','=','pt.id')
                ->join('users as u','u.id','=','apt.doctors_id')
                ->select('*')->selectRaw('apt.id'); // for having apt id at top
               // ->paginate(4); (note:use paginate() or get() at the each function)

        }else{
            return "Randevu görüntülemek için tanımlı bir role bulunmadı";
        }

    }
  public function doctor_with_his_patients(){ // patient who has a appointment (edit,show )
      if(Auth::user()->the_role()=="Doktor") {
          return $this->hasMany('App\Appointments', 'doctors_id')
              ->join('patients', 'patients.id', '=', 'appointments.patients_id')
              ->join('users', 'users.id', '=', 'appointments.doctors_id')
              ->join('patient_infos as pi', 'pi.patient_id', '=', 'patients.id')
              ->select('*')->selectRaw('appointments.id') // for having apt id at top
              ->get();
      }elseif (Auth::user()->the_role()=="Doktor(Master)"){
          return $this->hasMany('App\masterDoctors_and_Clinics','master_dr_id')
              ->join('patients as pt','pt.clinic_id','=','masterDr_and_Clinics.clinic_id')
              ->join('patient_infos as pi','pi.patient_id','=','pt.id')
              ->join('appointments as apt','apt.patients_id','=','pt.id')
              ->join('users as u','u.id','=','apt.doctors_id')
              ->select('*')->selectRaw('apt.id') // for having apt id at top
              ->get();
      }

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
    public function yetkili_kisi_masterDr(){
        if($this->the_role()=="Doktor(Master)" ){ // || $this->the_role()=="Doktor"
            return true;
        }else{
            return false;
        }
    }
    public function the_clinic_id(){
        if (Auth::user()->the_role()=="Doktor"){
              $clinic_id= $this->belongsToMany('App\masterDoctors_and_Clinics','UsersGenInfo_of_SubMasterDr','user_id','masterDr_and_clinic_id');
            foreach ( $clinic_id->get() as $a){
                return $a->clinic_id;
            }
        }elseif(Auth::user()->the_role()=="Doktor(Master)"){
            $clinic_id=$this->hasOne('App\masterDoctors_and_Clinics','master_dr_id');
            foreach ( $clinic_id->get() as $a){
                return $a->clinic_id;
            }
        }else{
            return "Kullanıcı Rolü, User sayfasında klinik için belirlenmedi";
        }
    }
    public function the_clinic_info(){
     $clinic_id=$this->the_clinic_id();
     return Clinics::where('id',$clinic_id)->first();
    }

    public function check_gender(){ // bu ilerde kaldırılacaktır
        if($this->the_role()=="Doktor"){
            return $this->belongsToMany('App\General_Infos','UsersGenInfo_of_SubMasterDr',
                'user_id','general_info_id')->get(['gender']);
        }elseif($this->the_role()=="Doktor(Master)"){
            return $this->belongsToMany('App\General_Infos','masterDr_and_GenInfo',
                'masterDr_id','general_info_id')->get(['gender']);
        }

    }

}
