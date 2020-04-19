<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryPayment_Add extends Model
{
    protected $table="history_payment_add";
    protected $fillable=["inv_sale_id","method","paid","paid_date"];
    public $timestamps=false;
}
