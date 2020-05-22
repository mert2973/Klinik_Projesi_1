<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_mng_itm_tax extends Model
{
   protected $table="order_mng_itm_taxes";
   protected $fillable=["order_mng_itms_id","tax_name","tax_rate","tax_price"];


}
