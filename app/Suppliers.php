<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Suppliers extends Model
{
    protected $fillable=["clinic_id","spp_name","spp_email","spp_phone","spp_adress","total_credit"];

    public function order_management_with_supplier(){ //from 1 supplier to 1 order
        $clinic_id=Auth::user()->the_clinic_id();
        return DB::table("order_managements as om")
            ->join("suppliers as spp","spp.id","=","om.supplier_id")
            ->where("om.clinic_id",$clinic_id)
            ->select("*")->selectRaw("om.id");
    }

}
