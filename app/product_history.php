<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_history extends Model
{
    protected $table="product_histories";
    protected $fillable=["process_date","order_mng_id","inv_sale_id","ptn_id","product_id","spp_id","Explanation","purchased","sold","remaining",];
}
