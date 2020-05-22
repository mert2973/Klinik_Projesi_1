<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryPayment_Add extends Model
{
    protected $table="history_payment_add";
    protected $fillable=["inv_id","type_inv","last_cash_balance","names","debt","credit","method","casing_id","paid_date"];
    public $timestamps=false;

}
