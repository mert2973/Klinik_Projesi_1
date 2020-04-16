<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Clinics extends Model
{

    protected  $fillable=['c_legal_name','c_name','c_phone','c_phone_2','c_email','status','adress1'];


    public function Invoices_Sales() { // some attributes made hidden at patient model
     return   $this->hasMany("App\Patients","clinic_id")
            ->join("invoices_sales as invs","invs.patient_id","=","patients.id")
            ->join("users as usr","usr.id","=","invs.doctor_id")
            ->select("*")->selectRaw("invs.id");
    }
    public function Invoices_Sales_View() { // some attributes made hidden at patient model

     return $a=  $this->hasMany("App\Patients","clinic_id")
            ->join("invoices_sales as invs","invs.patient_id","=","patients.id")

            ->select("*")->selectRaw("invs.id");

            //->join("users as usr","usr.id","=","invs.doctor_id")

    }
}
