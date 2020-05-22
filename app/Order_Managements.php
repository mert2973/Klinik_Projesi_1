<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Order_Managements extends Model
{
  protected $table="order_managements";
  protected $fillable=["clinic_id","supplier_id","total_qty","total_delivery","total_remaining","subtotal","tax","discount","discounttype","amount","paid","due","note","chk_inv","order_date","delivery_date"];


   /* public function order_mng_with_history_payment(){
        $clinic_id=Auth::user()->the_clinic_id();
        return DB::table("order_managements as om")
            // ->join("suppliers as spp","spp.id","=","om.supplier_id")
            ->leftJoin("history_payment_add as hs","hs.inv_id","=","om.id")->where("hs.type_inv","purchase")
            ->where("om.clinic_id",$clinic_id)->where("om.chk_inv",1)
            ->select("*")->selectRaw("om.id");
    } */
}
