<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inv_sale_items extends Model
{
    protected  $fillable=["inv_sale_id","itm_name","itm_dscr","cost","quantity","price","tax_price","tax_type_name","rate"];
}
