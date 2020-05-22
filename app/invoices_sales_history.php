<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invoices_sales_history extends Model
{
    protected $table="invoices_sales_histories";
    protected $fillable=["inv_sale_id","ptn_id","paid","amount_inv","total_balance","process_date"];
}
