<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Mng_items extends Model
{
    protected $table="order_mng_items";
    protected $fillable=["order_mng_id","itm_name","delivery_qty","remaning_qty","itm_id","quantity","purchaseprice","total_tax","total_price"];

    public function order_itms_with_tax(){
        return $this->hasMany("App\order_mng_itm_tax","order_mng_itms_id");
    }
}
