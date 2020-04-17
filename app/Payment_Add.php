<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_Add extends Model
{
    protected $table="payment_add";
    protected $fillable=["inv_sale_id","pyt_method","paid"];
}
