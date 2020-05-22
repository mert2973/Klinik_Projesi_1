<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Stocks extends Model
{
    protected $table="product_stocks";
    protected $fillable=["clinic_id","product_name","product_catgry","stock_code","product_note","have_products","total_till_now","item_cost","type"];
}
