<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_mng_history extends Model
{
    protected $table="order_mng_histories";
    protected $fillable=["order_mng_id","supplier_id","paid","amount_inv","total_balance","process_date"];
}
